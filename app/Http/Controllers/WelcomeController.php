<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index(){
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
        
        return view('welcome', compact('products', 'productRatings'));
        
    }
}
