<?php

use App\Http\Controllers\DiscountsController;
use App\Models\cart;
use App\Models\discounts;
use App\Models\produk;
use App\Models\service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\ordersController;

Route::get('/', function () {
    return view('welcome', ['title' => 'Home']);
});

Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
})->middleware('guest')->name('login');



Route::get('/register', function () {
    return view('register', ['title' => 'Register']);
})->middleware('guest');


// routes/web.php

// USER
Route::get('/user/dashboard', function () {
    return view('user.dashboard', ['title' => 'Dashboard']);
})->name('dashboard-user')->middleware('auth');

Route::get('/user/services', function () {
    return view('form.services', ['title' => 'Services', 'services' => Service::all()]);
})->name('services-user')->middleware('auth');

Route::get('/user/shop', function () {
    return view('form.shop', ['title' => 'Shop', 'produks' => Produk::all()]);
})->name('shop-user')->middleware('auth');

Route::get('/user/carts', function () {
    $userId = Auth::id(); // Ambil ID pengguna yang sedang login
    $carts = Cart::where('user_id', $userId)->get(); // Ambil cart berdasarkan user_id

    return view('form.carts', [
        'title' => 'Shopping Cart',
        'carts' => $carts
    ]);
})->name('carts-user')->middleware('auth');


// ADMIN
Route::get('/admin/dashboard', function () {

    return view('admin.dashboard', ['title' => 'Dashboard']);
})->name('dashboard-admin')->middleware('auth');

Route::get('/admin/services', function () {
    return view('form.services', ['title' => 'Services', 'services' => Service::all()]);
})->name('services-admin')->middleware('auth');

Route::get('/admin/shop', function () {
    return view('form.shop', ['title' => 'Shop', 'produks' => Produk::all()]);
})->name('shop-admin')->middleware('auth');

Route::get('/admin/carts', function () {
    $userId = Auth::id(); // Ambil ID pengguna yang sedang login
    $carts = Cart::where('user_id', $userId)->get(); // Ambil cart berdasarkan user_id
    return view('form.carts', ['title' => 'carts', 'carts' => $carts]);
})->name('carts-admin')->middleware('auth');

Route::get('/admin/manajemen-data', function () {
    return view('admin.manajemen', [
        'title' => 'Manajemen Data',
        'services' => Service::all(),
        'no' => 1,
        'noService' => 1,
        'produks' => Produk::all(),
    ]);
})->name('manajemen-admin')->middleware('auth');

Route::get('/admin/discounts', function () {
    return view('admin.discounts', ['title' => 'Discounts', 'discounts' => discounts::all()]);
})->name('discounts-admin')->middleware('auth');



Route::post('register', [userController::class, 'register'])->name('register')->middleware('guest');
Route::post('/login', [userController::class, 'login'])->name('form-login')->middleware('guest');



Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');


// feedback
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

//produk
Route::post('/produk', [productController::class, 'store'])->name('form-produk');
Route::put('/admin/produk/', [productController::class, 'update'])->name('produk.update');
Route::put('/admin/produk/{$id}', [ProductController::class, 'updateStok'])->name('updateStok');
Route::delete('/admin/produk/{$id}', [productController::class, 'destroy'])->name('produk.destroy');


// service
Route::post('/services', [serviceController::class, 'store'])->name('form-service');
Route::put('/services/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');


//carts

Route::get('/user/carts', [CartController::class, 'index'])->name('carts-user')->middleware('auth');


Route::post('/carts', [CartController::class, 'add'])->name('carts.add');
Route::patch('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
Route::delete('cart/destroy/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::post('/orders', [ordersController::class, 'store'])->name('order.create');
Route::post('orders/process', [ordersController::class, 'process'])->name('orders.process');

Route::post('discounts', [DiscountsController::class, 'store'])->name('discount.store');
Route::get('form/discounts/{id}', [DiscountsController::class, 'update'])->name('form.update-discount');
Route::put('discounts/{id}', [DiscountsController::class, 'edit'])->name('discount.update');
