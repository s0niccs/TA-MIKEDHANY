<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use PDF;
use Carbon\Carbon;

class OrderController extends Controller {
    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {
        if ( auth()->user()->usertype !== 'admin' ) {
            return redirect()->route( 'home' )->with( 'message', 'Anda bukan admin' );
        }
        $orders = Order::all();

        return view( 'order.index', compact( 'orders' ) );
    }

    public function riwayat() {
        $orders = Order::all();
        if ( auth()->user()->usertype == 'admin' ) {
            return redirect()->route( 'order.index' , compact( 'orders' ) );
        }
        $orders = Order::all();
        $user_id = Auth::id();
        $orders = Order::where('user_id', $user_id)->get();
        

        return view( 'riwayat', compact( 'orders' ) );
    }
    
    public function checkout( Request $request ) {

        $user_id = Auth::id();
        $carts = Cart::where( 'user_id', $user_id )->get();

        if ( $carts == null ) {
            return Redirect::back();
        }

        $orders = new Order;
        $orders->total_harga = $request[ 'total_harga' ];

        
        $orders->user_id = $user_id;
        $orders->save();

        foreach ( $carts as $cart ) {
            $product = Product::find( $cart->product_id );

            $product->update( [
                'stok' => $product->stok - $cart->jumlah,
            ] );

        
            Transaction::create( [
                'jumlah' => $cart->jumlah,
                'order_id' => $orders->id,
                'product_id' => $cart->product_id,
            ]);

            $cart->delete();
        }

        return Redirect::route( 'orders.show', $orders );
    }

    

    public function show( Order $order ) {
        $user = Auth::user();

        if ( $order->user_id == $user->id ) {
            return view( 'order.show', compact( 'order' ) );
        }

    }

    public function showtestimoni( Order $order ) {
        $user = Auth::user();

        if ( $order->user_id == $user->id ) {
            return view( 'testimoni', compact( 'order' ) );
        }

    }

    public function update(Request $request, $id)
{
    $order = Order::find($id);
    $order->nama = $request->nama;
    $order->alamat = $request->alamat;
    $order->no_telepon = $request->no_telepon;
    $order->kota = $request->kota; // Ambil nilai 'kota' dari formulir

    if ($request->hasFile('bukti_pembayaran')) {
        $file = $request->file('bukti_pembayaran');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/bukti/', $filename);
        $order->bukti_pembayaran = $filename;
    }

    $order->save();

    // Generate a unique order_id
    $uniqueOrderId = $order->id . '-' . time();

    // Set your Merchant Server Key
    \Midtrans\Config::$serverKey = config('midtrans.server_key');
    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    \Midtrans\Config::$isProduction = false;
    // Set sanitization on (default)
    \Midtrans\Config::$isSanitized = true;
    // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds = true;

    $params = array(
        'transaction_details' => array(
            'order_id' => $uniqueOrderId,
            'gross_amount' => $order->total_harga,
        ),
        'customer_details' => array(
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ),
    );

    $snapToken = \Midtrans\Snap::getSnapToken($params);

    return view('order.payment', compact('snapToken', 'order'));
}

public function callback(Request $request){
    $serverKey = config('midtrans.server_key');
    $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    if($hashed == $request->signature_key){
        if($request->transaction_status == 'capture' && $request->status_code == 200){
            $order = Order::find($request->order_id);
            $order->update(['status' => 'Paid']);
            
            return view('order.receipt', compact('order'));
        }
    } 
}

    public function print($id) {
    $orders = Order::find($id);

    if (!$orders) {
        Alert::warning('Gagal', 'Order tidak ditemukan.');
        return back();
    }

    if ($orders->status === 'Unpaid') {
        $orders->status_message = 'Gagal';
    } elseif ($orders->status === 'Paid') {
        $orders->status_message = 'Lunas';
    } else {
        $orders->status_message = 'Sedang dalam verifikasi';
    }

    return view('order.print', compact('orders'));
}



    public function cetakOrder(Request $request)
    {
        // Mendapatkan rentang waktu dari request
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Default rentang waktu jika tidak ada input dari pengguna
        $startDate = $startDate ? Carbon::parse($startDate)->startOfDay() : null;
        $endDate = $endDate ? Carbon::parse($endDate)->endOfDay() : null;

        $orders = Order::when($startDate, function ($query) use ($startDate) {
            return $query->where('tanggal_order', '>=', $startDate);
        })
        ->when($endDate, function ($query) use ($endDate) {
            return $query->where('tanggal_order', '<=', $endDate);
        })
        ->get();

        if (!$orders->isEmpty()) {
            foreach ($orders as $order) {
                // Tambahkan logika sesuai kebutuhan
                if ($order->verifikasi === 'tolak') {
                    $order->status_message = 'Gagal';
                } elseif ($order->verifikasi === 'terima') {
                    $order->status_message = 'Lunas';
                } else {
                    $order->status_message = 'Sedang dalam verifikasi';
                }
            }

        $pdf = PDF::loadView('order.printPDF', compact('orders'));
        return $pdf->download('laporan_data_' . date('Y-m-d_H-i-s') . '.pdf');
        }
    }

    public function updatekurir(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->kurir = $request->kurir;
        $order->save();

        return redirect()->back()->with('success', 'Kurir berhasil diperbarui.');
    }

    public function updatelacak(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->lacak = $request->lacak;
        $now = new \DateTime();
        $now->setTimezone(new \DateTimeZone('Asia/Jakarta'));
        $order->tanggal_update = $now;
        $order->save();

        return redirect()->back()->with('success', 'Status pengiriman diperbarui.');
    }
    
    public function updateStatus(Request $request, $id) {
        $order = Order::find($id);
    
        if (!$order) {
            return back()->with('error', 'Order not found.');
        }
    
        $verifikasi = $request->verifikasi;
    
        if ($verifikasi === 'terima') {
            // Logika jika diterima
            $order->verifikasi = 'terima';
            $order->save();
            echo "<script>alert('Berhasil menerima pesanan')</script>";
    
            // Kurangi stok products
            $transaction = Transaction::where('order_id', $order->id)->first();
    
            if ($transaction) {
                $jumlah = $transaction->jumlah;
    
                $product = Product::find($transaction->product_id);
    
                if ($product) {
                    $product->stok -= $jumlah;
                    $product->save();
                } else {
                    return back()->with('error', 'Product not found.');
                }
            } else {
                return back()->with('error', 'Transaction not found.');
            }
    
            // ...
    
        } elseif ($verifikasi === 'tolak') {
            // Logika jika ditolak
            $order->verifikasi = 'tolak';
            echo "<script>alert('Berhasil menolak pesanan')</script>";
            $order->save();
        
            // Tambah stok products
            $transaction = Transaction::where('order_id', $order->id)->first();
        
            if ($transaction) {
                $jumlah = $transaction->jumlah;
                $product_id = $transaction->product_id;
        
                // Pastikan $product_id tidak null
                if ($product_id) {
                    $product = Product::find($product_id);
        
                    if ($product) {
                        $product->stok += $jumlah;
                        $product->save();
                    } else {
                        return back()->with('error', 'Product not found.');
                    }
                } else {
                    return back()->with('error', 'Product ID not found in the transaction.');
                }
            } else {
                return back()->with('error', 'Transaction not found.');
            }
        
        // ...
        
    
            // ...
    
        } else {
            return back()->with('error', 'Invalid verification status.');
        }
    
        return back()->with('success', 'Status updated successfully.');
    }
    
        

    


    

   


}
