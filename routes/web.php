<?php

use App\Http\Controllers\ProductoController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("product", ProductController::class);

Route::get('/products/create', 'ProductController@create')->name('products.create');

Route::resource("productos", ProductoController::class);

Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('products.create');


Route::resource('products', ProductController::class);
