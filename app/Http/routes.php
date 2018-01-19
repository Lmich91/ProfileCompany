<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/






Route::get('/', 'BlogController@home');
Route::get('profil', 'BlogController@profil');
Route::get('customer', 'BlogController@customer');
Route::get('produk', 'BlogController@produk');
Route::get('blog', 'BlogController@blog');

Route::get('admin', 'ArticleController@index');
Route::get('admin/show/{id}', 'ArticleController@show');
Route::get('admin/add', 'ArticleController@create');
Route::post('admin/store', 'ArticleController@store');
Route::get('admin/edit/{id}', 'ArticleController@edit');
Route::post('admin/update/{id}', 'ArticleController@update');
Route::get('admin/delete/{id}', 'ArticleController@destroy');
Route::auth();
