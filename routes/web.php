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

Route::get('/','FrontController@index');
Route::get('/register','FrontController@register');
Route::prefix('/cart')->group(function (){
    Route::get('/cartA','FrontController@cartA');
    Route::get('/cartB','FrontController@cartB');
    Route::get('/cartC','FrontController@cartC');
    Route::get('/cartD','FrontController@cartD');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
