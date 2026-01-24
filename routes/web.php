<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/about', function () {
    return view('about');
});
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

// Register
Route::get('/register', [AuthController::class, 'showRegister']);

Route::post('/register', [AuthController::class, 'register'])->name('register');


// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Logout
Route::get('/logout', [AuthController::class, 'logout']);



Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/order_product', [OrderController::class, 'create'])
        ->name('order.create');

    Route::post('/order_product', [OrderController::class, 'store'])
        ->name('order.store');
});


Route::post('/confirm-order', [OrderController::class, 'confirm'])
    ->name('order.confirm')
    ->middleware('auth');

Route::post('/place-order', [OrderController::class, 'store'])
    ->name('order.store')
    ->middleware('auth');

    use App\Http\Controllers\PaymentController;

Route::post('/payment', [PaymentController::class, 'show'])
    ->name('payment.page')
    ->middleware('auth');

Route::post('/payment-success', [PaymentController::class, 'success'])
    ->name('payment.success')
    ->middleware('auth');
    
Route::get('/order-product', [OrderController::class, 'create'])
    ->name('order.product')
    ->middleware('auth');


Route::get('/order', [OrderController::class, 'myOrders'])
    ->name('my.orders')
    ->middleware('auth');