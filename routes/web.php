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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('view-product', 'App\Http\Controllers\AuthorizationController@viewProduct');
Route::get('create-product', 'App\Http\Controllers\AuthorizationController@createProduct');
Route::get('edit-product', 'App\Http\Controllers\AuthorizationController@editProduct');
Route::get('checkout-product', 'App\Http\Controllers\AuthorizationController@checkoutProduct');
Route::get('delete-product', 'App\Http\Controllers\AuthorizationController@deleteProduct');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
