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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/studios', 'StudiosController@index')->name('studios');
Route::get('/studios/create','StudiosController@create');
Route::get('studios/{id}','StudiosController@show');
Route::post('/studios', 'StudiosController@store');