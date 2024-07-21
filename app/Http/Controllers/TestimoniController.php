<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Testimoni;
use App\Models\Product;

use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {

        $testimonis = Testimoni::all();
        return view( 'testimoni.index', compact( 'testimonis' ) );
    }

    public function store(Request $request)
{
    // Check if any testimonial has a rating of 0
    if (collect($request->input('testimoni'))->contains('rating', 0)) {
        $user_id = Auth::id();
        $orders = Order::where('user_id', $user_id)->get();

        // Store error message in the session
        session()->flash('error', 'Gagal menambahkan testimoni karena rating kosong, harap isi kembali');
        
        // Redirect back to the previous page
        return redirect()->back();
    }

    // Validate and save testimonials if the rating is not empty
    $request->validate([
        'testimoni.*.rating' => 'required|numeric|min:1|max:5',
        'testimoni.*.product_id' => 'required|exists:products,id',
        'testimoni.*.user_id' => 'required|exists:users,id',
        'testimoni.*.komentar' => 'nullable|string',
        'testimoni.*.order_id' => 'required|exists:orders,id', // Ensure order_id is validated
    ]);

    foreach ($request->input('testimoni') as $data) {
        Testimoni::create($data);
    }

    $user_id = Auth::id();
    $orders = Order::where('user_id', $user_id)->get();

    // Store success message in the session
    session()->flash('success', 'Berhasil menambahkan testimoni');

    // Redirect to the history page
    return view('riwayat', compact('orders'));
}



    public function calculateAverageRatings()
    {
        // Ambil produk dan rata-rata rating untuk setiap produk
        $products = Product::all();
        $productRatings = [];

        foreach ($products as $product) {
            // Menggunakan AVG() untuk menghitung rata-rata kolom rating
            $averageRating = Testimoni::where('product_id', $product->id)->avg('rating');

            // Jika nilai rata-rata ada, simpan dalam array
            if (!is_null($averageRating)) {
                $productRatings[$product->id] = number_format($averageRating, 2);
            }
        }

        return view('welcome', compact('products','productRatings'));
    }



}
