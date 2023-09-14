<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function() {
    return view('home.index');
});

Route::get('products/category/{id}', function() {
    return view('product.by_category');
});

Route::get('product/detail/{id}', function() {
    return view('product.detail');
});

Route::get('product/cart', function() {
    return view('product.cart');
});

Route::get('contact', function() {
    return view('home.contact');
});

Route::get('about-us', function() {
    return view('home.about');
});
