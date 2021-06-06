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
    return view('front.index');
});

Route::get('/shopping-cart-A', function () {
    return view('front.shopping-cart-A');
});

Route::get('/shopping-cart-B', function () {
    return view('front.shopping-cart-B');
});

Route::get('/shopping-cart-C', function () {
    return view('front.shopping-cart-C');
});

Route::get('/shopping-cart-D', function () {
    return view('front.shopping-cart-D');
});

Route::get('/register', function () {
    return view('front.register');
});

Route::get('/layout', function () {
    return view('layout.layout');
});
