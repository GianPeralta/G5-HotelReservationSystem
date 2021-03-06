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
	Route::get('/guests/create', 'GuestsController@create');
	Route::get('/guests/{guest}', 'GuestsController@show');
	Route::get('/guests/{guest}/edit', 'GuestsController@edit');

	// GET /events/{event}/edit update display the update form
	Route::get('/guests/{guest}/edit', 'GuestsController@edit');
	Route::get('/guests/{guest}', 'GuestsController@show');
	
	//POST /events store a record
	Route::post('/guests', 'GuestsController@store');
	Route::put('/guests/{guest}', 'GuestsController@update');
	Route::delete('/guests/{guest}', 'GuestsController@destroy');


Route::middleware(['auth'])->group(function(){

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

	// PAYMENTS
	Route::get('/payments', 'PaymentsController@index');
	Route::get('/payments/create', 'PaymentsController@create');
	Route::get('/payments/{payment}', 'PaymentsController@show');
	Route::get('/payments/{payment}/edit','PaymentsController@edit');
	Route::post('/payments', 'PaymentsController@store');
	Route::put('/payments/{payment}', 'PaymentsController@update');
	Route::delete('/payments/{payment}', 'PaymentsController@destroy');

	// USER ROLES
	Route::get('/user-roles', 'UserRolesController@index');
	Route::get('/user-roles/create', 'UserRolesController@create');
	Route::get('/user-roles/{user_role}', 'UserRolesController@show');
	Route::get('/user-roles/{user_role}/edit', 'UserRolesController@edit');
	Route::post('/user-roles', 'UserRolesController@store');
	Route::put('/user-roles/{user_role}', 'UserRolesController@update');
	Route::delete('/user-roles/{user_role}', 'UserRolesController@destroy');
  
  	//RESERVATIONS
	Route::get('/reservations', 'ReservationsController@index');
	Route::get('/reservations/create', 'ReservationsController@create');
	Route::get('/reservations/{reservation}', 'ReservationsController@show');
	Route::get('/reservations/{reservation}/edit', 'ReservationsController@edit');
	Route::post('/reservations', 'ReservationsController@store');
	Route::put('/reservations/{reservation}', 'ReservationsController@update');
	Route::delete('/reservations/{reservation}', 'ReservationsController@destroy');
  
  	//SERVICES
	Route::get('/services', 'ServicesController@index');
	Route::get('/services/create', 'ServicesController@create');
	Route::get('/services/{service}', 'ServicesController@show');
	Route::get('/services/{service}/edit', 'ServicesController@edit');
	Route::post('/services', 'ServicesController@store');
	Route::put('/services/{service}', 'ServicesController@update');
	Route::delete('/services/{service}', 'ServicesController@destroy');

	Route::post('/room-type-rooms/{room_type}', 'RoomTypeRoomsController@store');
});


