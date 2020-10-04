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
Route::get('/user-roles', 'UserRolesController@index');
Route::get('/user-roles/create', 'UserRolesController@create');
Route::get('/user-roles/{user_role}', 'UserRolesController@show');
Route::get('/user-roles/{user_role}/edit', 'UserRolesController@edit');
Route::post('/user-roles', 'UserRolesController@store');
Route::put('/user-roles/{user_role}', 'UserRolesController@update');
Route::delete('/user-roles/{user_role}', 'UserRolesController@destroy');