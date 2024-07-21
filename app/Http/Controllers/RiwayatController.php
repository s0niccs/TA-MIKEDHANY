<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{

    public function index()
    {
        // Pastikan user sudah login
        if (Auth::check()) {
            $user = Auth::user();

            // Hanya tampilkan riwayat untuk user dengan tipe 'user' dan ID yang login
            if ($user->usertype === 'user') {
                $user_id = Auth::id();
                $orders = Order::where('user_id', $user->id)->get();
                // $user_id = Auth::id();
                // $orders = Order::where( 'user_id', $user_id )->get();

                return view('riwayat', compact('orders'));
            } elseif ($user->usertype === 'admin') {
                return view('orders.index');
            } else {
                // Logika untuk tipe user lainnya
            }
        } else {
            // User belum login, tambahkan logika atau redirect sesuai kebutuhan
            return redirect()->route('login');
        }
    }
}