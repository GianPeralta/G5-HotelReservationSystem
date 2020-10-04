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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/staff-users', 'StaffUsersController@index');
Route::get('/staff-users/create', 'StaffUsersController@create');
Route::get('/staff-users/{staff_user}', 'StaffUsersController@show');
Route::get('/staff-users/{staff_user}/edit', 'StaffUsersController@edit');
Route::post('/staff-users', 'StaffUsersController@store');
Route::put('/staff-users/{staff_user}', 'StaffUsersController@update');
Route::delete('/staff-users/{staff_user}', 'StaffUsersController@destroy');