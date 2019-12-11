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

Route::get('/', 'FrontController@index')->name('home');
Route::get('discount', 'FrontController@indexDiscount')->name('discount');
Route::get('category/{slug}', 'FrontController@indexCategory')->name('category');
Route::get('product/{slug}', 'FrontController@show')->name('product');

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'ProductController@index')->name('home');
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
});

Auth::routes();
