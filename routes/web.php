<?php

use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

Route::get('/products/{category?}/{sub_category?}', function () {
    return view('products');
});

Route::get('/sign-in', function () {
    return view('sign_in');
})->name('sign-in');

Route::get('/sign-up', function () {
    return view('sign_up');
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/product-details', function () {
    return view('product_details');
});



Route::middleware('auth:customer')->group(function () {
    Route::get('/profile', function () {
        return view('customer_profile');
    });
    
    Route::get('/favourite-list', function () {
        return view('favourite_list');
    });
    
    Route::get('/orders', function () {
        return view('orders');
    });

    Route::get('/shopping-cart', function () {
        return view('shopping_cart');
    });

    Route::get('/checkout', function () {
        return view('checkout');
    });
    
    Route::get('/report-product', function () {
        return view('report_product');
    });
});
