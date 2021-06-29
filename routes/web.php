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
    // 購物車頁面
    Route::get('/cartA','FrontController@cartA');
    Route::get('/cartB','FrontController@cartB');
    Route::post('/cartB/check','FrontController@paymentCheck');
    Route::get('/cartC','FrontController@cartC');
    Route::get('/cartD','FrontController@cartD');

    // 購物車計算
    Route::post('/add','FrontController@add');
    Route::get('/content','FrontController@content');
    Route::get('/clear','FrontController@clear');
    Route::post('/update','FrontController@update');
});

Route::get('/product','FrontController@product');



// 後端
// Route::middleware(['auth', 'admin'])->prefix('/admin')->group(function () {
// });

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/home', 'HomeController@index')->name('home');


// 產品管理
Route::prefix('/admin/product')->group(function () {
    // 產品種類管理
    Route::prefix('/type')->group(function () {
        Route::get('/', 'ProductTypeController@index');
        Route::get('/create', 'ProductTypeController@create');
        Route::post('/store', 'ProductTypeController@store');
        Route::get('/edit/{id}', 'ProductTypeController@edit');
        Route::post('/update/{id}', 'ProductTypeController@update');
        Route::delete('/delete/{id}', 'ProductTypeController@delete');
    });


    // 產品品項管理
    Route::prefix('/item')->group(function () {
        Route::get('/', 'ProductController@index');
        Route::get('/create', 'ProductController@create');
        Route::post('/store', 'ProductController@store');
        Route::get('/edit/{id}', 'ProductController@edit');
        Route::post('/update/{id}', 'ProductController@update');
        Route::delete('/delete/{id}', 'ProductController@delete');
        Route::post('/deleteImage', 'ProductController@deleteImage');
    });
});

// 聯絡我們管理
Route::prefix('/admin/contactus')->group(function (){
    Route::get('/','ContactUsController@index');
    Route::post('/store','ContactUsController@store');
    Route::get('/seemore/{id}','ContactUsController@seemore');
    Route::delete('/delete/{id}', 'ContactUsController@delete');
});

// 最新消息管理
Route::prefix('/admin/news')->group(function () {

    Route::prefix('/type')->group(function () {
        Route::get('/', 'NewsTypeController@index');
        Route::get('/create', 'NewsTypeController@create');
        Route::post('/store', 'NewsTypeController@store');
        Route::get('/edit/{id}', 'NewsTypeController@edit');
        Route::post('/update/{id}', 'NewsTypeController@update');
        Route::delete('/delete/{id}', 'NewsTypeController@delete');
    });


    Route::prefix('/item')->group(function () {
        Route::get('/', 'NewsController@index');
        Route::get('/create', 'NewsController@create');
        Route::post('/store', 'NewsController@store');
        Route::get('/edit/{id}', 'NewsController@edit');
        Route::post('/update/{id}', 'NewsController@update');
        Route::delete('/delete/{id}', 'NewsController@delete');
    });
});
