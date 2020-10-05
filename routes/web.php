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
	Route::get('/reservations', 'ReservationsController@index');
	Route::get('/reservations/create', 'ReservationsController@create');
	Route::get('/reservations/{reservation}', 'ReservationsController@show');
	Route::get('/reservations/{reservation}/edit', 'ReservationsController@edit');
	Route::post('/reservations', 'ReservationsController@store');
	Route::put('/reservations/{reservation}', 'ReservationsController@update');
	Route::delete('/reservations/{reservation}', 'ReservationsController@destroy');