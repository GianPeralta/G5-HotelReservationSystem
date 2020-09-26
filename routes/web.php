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
// FOR HOMEPAGE
Route::get('/', 'PaymentsController@index');

Route::get('/payments/create', 'PaymentsController@create');
Route::get('/payments/{payment}', 'PaymentsController@show');
Route::get('/payments/{payment}/edit','PaymentsController@edit');

Route::post('/payments', 'PaymentsController@store');
Route::put('/payments/{payment}', 'PaymentsController@update');
Route::delete('/payments/{payment}', 'PaymentsController@destroy');


// GET /events/create --create display the create form
// GET /events{payment}/update --edit discplay the update form

// REST
// POST /payments --store a record
// PUT /payments/{payment} --update a record
// DELETE /payments/{payments} --delete a record




