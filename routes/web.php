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


Route::middleware(['auth'])->group(function(){
	// FOR GUESTS TABLE
	Route::get('/guests', 'GuestsController@index');
	Route::get('/guests/create', 'GuestsController@create');
	Route::get('/guests/{guest}', 'GuestsController@show');
	Route::get('/guests/{guest}/edit', 'GuestsController@edit');
	Route::post('/guests', 'GuestsController@store');
	Route::put('/guests/{guest}', 'GuestsController@update');
	Route::delete('/guests/{guest}', 'GuestsController@destroy');


	// FOR RESERVATION STATUSES TABLE
	Route::get('/reservation_statuses', 'ReservationStatusesController@index');
	Route::get('/reservation_statuses/create', 'ReservationStatusesController@create');
	Route::get('/reservation_statuses/{reservation_status}', 'ReservationStatusesController@show');
	Route::get('/reservation_statuses/{reservation_status}/edit', 'ReservationStatusesController@edit');
	Route::post('/reservation_statuses', 'ReservationStatusesController@store');
	Route::put('/reservation_statuses/{reservation_status}', 'ReservationStatusesController@update');
	Route::delete('/reservation_statuses/{reservation_status}', 'ReservationStatusesController@destroy');

	//ROOMS
	Route::get('/rooms', 'RoomsController@index');
	Route::get('/rooms/create', 'RoomsController@create');
	Route::get('/rooms/{room}', 'RoomsController@show');
	Route::get('/rooms/{room}/edit', 'RoomsController@edit'); 
	Route::post('/rooms', 'RoomsController@store');
	Route::put('/rooms/{room}', 'RoomsController@update');
	Route::delete('/rooms/{room}', 'RoomsController@destroy');


	//ROOM TYPES
	Route::get('/room-types', 'RoomTypesController@index');
	Route::get('/room-types/create', 'RoomTypesController@create');
	Route::get('/room-types/{room_type}', 'RoomTypesController@show');
	Route::get('/room-types/{room_type}/edit', 'RoomTypesController@edit');
	Route::post('/room-types', 'RoomTypesController@store');
	Route::put('/room-types/{room_type}', 'RoomTypesController@update');
	Route::delete('/room-types/{room_type}', 'RoomTypesController@destroy');

	//STAFF USERS
	Route::get('/staff-users', 'StaffUsersController@index');
	Route::get('/staff-users/create', 'StaffUsersController@create');
	Route::get('/staff-users/{staff_user}', 'StaffUsersController@show');
	Route::get('/staff-users/{staff_user}/edit', 'StaffUsersController@edit');
	Route::post('/staff-users', 'StaffUsersController@store');
	Route::put('/staff-users/{staff_user}', 'StaffUsersController@update');
	Route::delete('/staff-users/{staff_user}', 'StaffUsersController@destroy');

	// FOR HOMEPAGE
	Route::get('/', 'PaymentsController@index');
	Route::get('/payments/create', 'PaymentsController@create');
	Route::get('/payments/{payment}', 'PaymentsController@show');
	Route::get('/payments/{payment}/edit','PaymentsController@edit');
	Route::post('/payments', 'PaymentsController@store');
	Route::put('/payments/{payment}', 'PaymentsController@update');
	Route::delete('/payments/{payment}', 'PaymentsController@destroy');

});

