<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Testimoni;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index(){
            $products = Product::all();

            if (Auth::id()){
                $usertype = Auth()->user()->usertype;
                if ($usertype == 'user'){
                    $products = Product::all();
            $productRatings = [];

            foreach ($products as $product) {
                // Menggunakan AVG() untuk menghitung rata-rata kolom rating
                $averageRating = Testimoni::where('product_id', $product->id)
                    ->avg('rating');
            
                // Jika nilai rata-rata ada, simpan dalam array
                if (!is_null($averageRating)) {
                    $productRatings[$product->id] = number_format($averageRating, 2);
                }
            }

                return view('dashboard', compact('products', 'productRatings'));

            } elseif ($usertype == 'kurir1') {
                $orders = Order::where('kurir', 'kurir1')->get();
                return view('kurir.kurirhome', compact('orders'));

            } elseif ($usertype == 'kurir2') {
                $orders = Order::where('kurir', 'kurir2')->get();
                return view('kurir.kurirhome', compact('orders'));

            } elseif ($usertype == 'kurir3') {
                $orders = Order::where('kurir', 'kurir3')->get();
                return view('kurir.kurirhome', compact('orders'));

            }elseif ($usertype == 'admin') {
                    $ordersPerCity = Order::select(DB::raw('kota, COUNT(*) as count'))
                    ->groupBy('kota')
                    ->get();

                    // jumlah produk terjual
                        $products = Transaction::select('products.nama_barang')
                        ->join('products', 'transactions.product_id', '=', 'products.id')
                        ->selectRaw('nama_barang, sum(jumlah) as total_penjualan')
                        ->groupBy('nama_barang')
                        ->get();

                    $labels2 = $products->pluck('nama_barang');
                    $data2 = $products->pluck('total_penjualan');
    
                return view('admin.adminhome', compact('ordersPerCity', 'labels2', 'data2'));
            }elseif ($usertype == 'kurir') {
                return view('kurir.kurirhome');
            }
            else{
                $products = Product::all();
            $productRatings = [];

            foreach ($products as $product) {
                // Menggunakan AVG() untuk menghitung rata-rata kolom rating
                $averageRating = Testimoni::where('product_id', $product->id)
                    
                    ->avg('rating');
            
                // Jika nilai rata-rata ada, simpan dalam array
                if (!is_null($averageRating)) {
                    $productRatings[$product->id] = number_format($averageRating, 2);
                }
            }

                return view('dashboard', compact('products', 'productRatings'));
            } 
        }
    }
    
}
