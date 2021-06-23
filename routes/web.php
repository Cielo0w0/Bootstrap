<?php

use Illuminate\Support\Facades\Auth;
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

// 會員系統
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// 前端
Route::get('/','FrontController@index');
Route::get('/register','FrontController@register');
Route::prefix('/cart')->group(function (){
    Route::get('/cartA','FrontController@cartA');
    Route::get('/cartB','FrontController@cartB');
    Route::get('/cartC','FrontController@cartC');
    Route::get('/cartD','FrontController@cartD');
});

// 後端
// Route::middleware(['auth', 'admin'])->prefix('/admin')->group(function () {
// });

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/home', 'HomeController@index')->name('home');

Route::prefix('/admin/product')->group(function () {
    // 產品管理
    Route::prefix('/type')->group(function () {
        // 產品種類管理
        Route::get('/', 'ProductTypeController@index');
        Route::get('/create', 'ProductTypeController@create');
        Route::post('/store', 'ProductTypeController@store');
        Route::get('/edit/{id}', 'ProductTypeController@edit');
        Route::post('/update/{id}', 'ProductTypeController@update');
        Route::delete('/delete/{id}', 'ProductTypeController@delete');
    });


    Route::prefix('/item')->group(function () {
        // 產品品項管理
        Route::get('/', 'ProductController@index');
        Route::get('/create', 'ProductController@create');
        Route::post('/store', 'ProductController@store');
        Route::get('/edit/{id}', 'ProductController@edit');
        Route::post('/update/{id}', 'ProductController@update');
        Route::delete('/delete/{id}', 'ProductController@delete');
    });
});


