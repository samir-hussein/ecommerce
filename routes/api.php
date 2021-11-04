<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\WishlistController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('is-auth', [AuthController::class, 'isAuth']);

Route::get('auth/google', [GoogleController::class, 'loginWithGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'callbackFromGoogle']);

Route::get('auth/facebook', [FacebookController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [FacebookController::class, 'loginWithFacebook']);

Route::get('cart/count-items', [CartController::class, 'numberOfItems']);
Route::get('wishlist/count-items', [WishlistController::class, 'numberOfItems']);

Route::get('products/{category?}/{sub_category?}', [ProductController::class, 'show']);
Route::get('categories/read', [ProductController::class, 'categories']);

Route::middleware('auth:customer')->group(function () {

    // Cart Routes
    Route::get('cart/clear', [CartController::class, 'clear']);
    Route::get('cart/add-item/{item_id}', [CartController::class, 'addItem']);
    Route::get('cart/remove-item/{item_id}/{all?}', [CartController::class, 'removeItem']);
    Route::get('cart/read', [CartController::class, 'read']);

    // Wishlist Routes
    Route::get('wishlist/add-item/{item_id}', [WishlistController::class, 'addItem']);
    Route::get('wishlist/clear', [WishlistController::class, 'clear']);
    Route::get('wishlist/remove-item/{item_id}', [WishlistController::class, 'removeItem']);
    Route::get('wishlist/read', [WishlistController::class, 'read']);

    // Customer Info Routes
    Route::get('customer/info', [CustomerController::class, 'read']);
    Route::post('customer/edit', [CustomerController::class, 'edit']);
});
