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

Route::resource('cities', App\Http\Controllers\CityController::class);
Route::resource('customers', App\Http\Controllers\CustomerController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('detail', App\Http\Controllers\OrderDetallController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

