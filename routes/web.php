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
    return view('welcome');
});

Route::get('/','TasksController@index');
Route::resource('tasks','TasksController');

//Route::get('Tasks/{id}','TasksController@show');
//Route::post('Tasks','TasksController@store');
//Route::put('Tasks/{id}','TasksController@update');
//Route::delete('Tasks/{id}','TasksController@destroy');
