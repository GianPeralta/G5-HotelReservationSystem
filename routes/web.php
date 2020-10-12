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
// FOR LOGIN
Route::get('/', 'LoginController@index')->name('login');
Route::post('/', 'LoginController@login');
Route::get('/register', 'LoginController@register');
Route::post('/register', 'LoginController@store');

Route::get('/logout', 'LoginController@logout')->middleware('auth');

// FOR HOMEPAGE
Route::get('/home', 'HomeController@index')->middleware('auth');



// FOR GUESTS

	Route::get('/guests', 'GuestsController@index');

	// GET /events/create display the create form
	Route::get('/guests/create', 'GuestsController@create');

	// GET /events/{event}/edit update display the update form
	Route::get('/guests/{guest}/edit', 'GuestsController@edit');

	Route::get('/guests/{guest}', 'GuestsController@show');
	
	//POST /events store a record
	Route::post('/guests', 'GuestsController@store');

	//PUT /events/{event} update
	Route::put('/guests/{guest}', 'GuestsController@update');

	//DELETE /events/{event} delete
	Route::delete('/guests/{guest}', 'GuestsController@destroy');


Route::middleware(['auth'])->group(function(){

	// FOR RESERVATION STATUSES TABLE

	Route::get('/reservation_statuses', 'ReservationStatusesController@index');

	// GET /events/create display the create form
	Route::get('/reservation_statuses/create', 'ReservationStatusesController@create');
	Route::get('/reservation_statuses/{reservation_status}', 'ReservationStatusesController@show');
	// GET /events/{event}/edit update display the update form
	Route::get('/reservation_statuses/{reservation_status}/edit', 'ReservationStatusesController@edit');

	//POST /events store a record
	Route::post('/reservation_statuses', 'ReservationStatusesController@store');

	//PUT /events/{event} update
	Route::put('/reservation_statuses/{reservation_status}', 'ReservationStatusesController@update');

	//DELETE /events/{event} delete
	Route::delete('/reservation_statuses/{reservation_status}', 'ReservationStatusesController@destroy');

});

