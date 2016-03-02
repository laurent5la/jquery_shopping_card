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

Route::get('/cos', 'ProductsController@index');
Route::get('/coo', 'ProductsController@index');
Route::post('/checkout', 'CheckoutController@index');

// AJAX Calls
Route::post('/annual','CheckoutController@annual');
Route::post('/coupon','CheckoutController@coupon');
Route::post('/close','CheckoutController@close');
