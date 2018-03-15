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

Route::get('/', 'MovieController@display')->name('home');

Auth::routes();

Route::get('/home', 'MovieController@display')->name('home');

Route::prefix('admin')->group(function(){

	Route::get('/','AdminController@index');
	Route::get('/movie','MovieController@show');
	Route::get('/movie/add','MovieController@addMovie');
	Route::post('/movie/insert','MovieController@insert');
	Route::get('/movie/edit/{id}','MovieController@edit');
	Route::post('/movie/update','MovieController@update');
	Route::post('/movie/delete','MovieController@delete');

});
