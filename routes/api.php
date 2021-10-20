<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;

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

Route::post('customer-info', [CustomerController::class, 'read']);



Route::middleware('auth:customer')->group(function () {

    // Cart Routes
    Route::get('cart-clear', [CartController::class, 'clear']);
    Route::get('cart-add-item/{item_id}', [CartController::class, 'addItem']);
    Route::get('cart-remove-item/{item_id}', [CartController::class, 'removeItem']);
    Route::get('cart-read', [CartController::class, 'read']);
});
