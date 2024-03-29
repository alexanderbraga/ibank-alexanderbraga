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

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'Web\HomeController@index')->name('home');
    Route::get('/home', 'Web\HomeController@index')->name('home');

    Route::resource('products','Web\ProductController');
    Route::get('products', 'Web\ProductController@index');
    Route::post('product', 'Web\ProductController@create');
    Route::delete('{id}/products', 'Web\ProductController@delete');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
