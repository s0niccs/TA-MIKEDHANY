<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Midtrans\Config;
use Midtrans\Snap;

class OrderrController extends Controller
{
    public function index()
    {
        return view('test');
    }

    // public function checkoutt(Request $request){
    //     $request->request->add(['total_price'=>$request->qty = 10000, 'status'=> 'Unpaid']);
    //     $orderr = Orderr::create($request->all());
    //     // Set your Merchant Server Key
    //     \Midtrans\Config::$serverKey = config('midtrans.server_key');
    //     // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    //     \Midtrans\Config::$isProduction = false;
    //     // Set sanitization on (default)
    //     \Midtrans\Config::$isSanitized = true;
    //     // Set 3DS transaction for credit card to true
    //     \Midtrans\Config::$is3ds = true;

    //     $params = array(
    //         'transaction_details' => array(
    //             'order_id' => $orderr->id,
    //             'gross_amount' => $orderr->total_price,
    //         ),
    //         'customer_details' => array(
    //             'nama' => $request->nama,
    //             'alamat' => $request->alamat,
    //         ),
    //     ); 

    //     $snapToken = \Midtrans\Snap::getSnapToken($params);
    //     return  view('checkoutt', compact('snapToken', 'orderr'));
    // }

    public function callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture' && $request->status_code == 200){
                $order = Order::find($request->order_id);
                $order->update(['status' => 'Paid']);
            }
        } 
    }
   
}
