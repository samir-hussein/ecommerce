<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/products/{category}', function () {
    return view('products');
});
Route::get('/sign-in', function () {
    return view('sign_in');
});
Route::get('/sign-up', function () {
    return view('sign_up');
});
Route::get('/profile', function () {
    return view('customer_profile');
});
Route::get('/favourite-list', function () {
    return view('favourite_list');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/shopping-cart', function () {
    return view('shopping_cart');
});
Route::get('/product-details', function () {
    return view('product_details');
});
