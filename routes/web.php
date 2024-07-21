<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderrController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome'); // ng kene kudune , lak awakmu kate nyeluk ng kene yo isok, variabelmu dekek en kene, tapi ga di rekomendasino.
// });

Route::get('/test', [OrderrController::class, 'index']);
Route::post('/checkoutt', [OrderrController::class, 'checkoutt']);

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');
 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/welcome', function () {
//     return view('welcome');
// })->middleware(['auth', 'verified'])->name('welcome');



Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    // Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

// Rute Employees
Route::resources([
    'employees' => EmployeeController::class,
]);

// Rute Products
Route::resources([
    'products' => ProductController::class,
]);

// Rute Cart
Route::post('/carts/{product}', [CartController::class, 'store'])->name('carts.store');
Route::get('/carts', [CartController::class, 'show'])->name('carts.show');
Route::patch('/carts/{cart}', [CartController::class, 'update'])->name('carts.update');
Route::delete('/carts/{cart}', [CartController::class, 'destroy'])->name('carts.destroy');


// Rute Order
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');


Route::post('/orderspayment/{order}', [OrderController::class, 'payment'])->name('orders.payment');

Route::put('/orders/updatekurir/{id}', [orderController::class, 'updatekurir'])->name('orders.updatekurir');
Route::put('/orders/updatelacak/{id}', [orderController::class, 'updatelacak'])->name('orders.updatelacak');
Route::get('/print-orders/{id}', [OrderController::class, 'print']);
Route::get('/printpdf', [OrderController::class, 'cetakOrder'])->name('orders.print');
Route::post('/orders/update-status/{id}', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
Route::get('/print-order/{id}', 'OrderController@cetakOrder')->name('print-order');


// Rute Transaction
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');

//Rute Riwayat
Route::get('/riwayat', [RiwayatController::class, 'index']);
Route::get('/riwayat', [OrderController::class, 'riwayat']);

// Rute User
Route::middleware(['auth'])->group(function () {
Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::middleware(['auth'])->group(function () {
Route::put('/users/update-type/{id}', [UserController::class, 'updateType'])->name('users.updateType');

});

});


// Rute Testimoni
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
Route::get('/testimoni/{order}', [OrderController::class, 'showtestimoni'])->name('testimoni');
Route::post('/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
Route::post('/verifikasi/{id}', [TestimoniController::class, 'verifikasi'])->name('verifikasi');
Route::get('/calculate-average-ratings', [TestimoniController::class, 'calculateAverageRatings'])->name('calculate.average.ratings');
require __DIR__.'/auth.php';
