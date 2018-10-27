<?php

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
    return view('years.show');
});
Route::get('/years','YearsController@show');
Route::get('/years/create','YearsController@create');
Route::post('/years/add', 'YearsController@store');

Route::get('/members','MembersController@show');
Route::post('/members/add','MembersController@store');

Route::get('/departements','DepartementsController@show');
Route::post('/departements/add','DepartementsController@store');


Route::get('/formations','FormationsController@show');