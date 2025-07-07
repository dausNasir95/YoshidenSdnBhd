<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])->name('product.index');

// Route::get('/products', [ProductController::class, 'index'])->name('products.indexCategory');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('productdetails');
Route::post('/products/{product}/enquiry', [ProductController::class, 'submitEnquiry'])->name('products.enquiry');

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/welcome', function () {
    return view('welcome');
});

