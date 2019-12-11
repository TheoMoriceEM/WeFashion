<?php

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

Route::get('/', 'FrontController@home')->name('home');
Route::get('discount', 'FrontController@onDiscount')->name('discount');
Route::get('category/{slug}', 'FrontController@category')->name('category');
Route::get('product/{slug}', 'FrontController@product')->name('product');
