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

Route::get('/services', 'ServicesController@index');
Route::get('/services/create', 'ServicesController@create');
Route::get('/services/{service}', 'ServicesController@show');
Route::get('/services/{service}/edit', 'ServicesController@edit');
Route::post('/services', 'ServicesController@store');
Route::put('/services/{service}', 'ServicesController@update');
Route::delete('/services/{service}', 'ServicesController@destroy');
