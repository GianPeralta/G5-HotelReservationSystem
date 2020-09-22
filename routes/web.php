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

/*Route::get('/', function () {
    return view('welcome');
});*/

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