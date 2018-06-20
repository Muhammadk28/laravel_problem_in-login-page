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

Route::get('/', 'kayesController@index' );
Route::get('/details', 'kayesController@details' );
Route::get('/product', 'kayesController@product' );
Route::get('/checkout', 'kayesController@check' );
Route::get('/cart', 'kayesController@cart' );








/*this route for backend developing */

Route::get('/login', 'adminController@index');
Route::get('/dashboard', 'adminController@show');
Route::post('/board', 'adminController@board');
