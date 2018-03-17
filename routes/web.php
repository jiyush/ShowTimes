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
Route::get('/user/{id}','MovieController@book');

Auth::routes();

Route::get('/user','MovieController@display')->name('user');

Route::prefix('admin')->group(function(){

	Route::get('/','AdminController@index');
	Route::get('/movie','MovieController@show');
	Route::get('/movie/add','MovieController@addMovie');
	Route::post('/movie/insert','MovieController@insert');
	Route::get('/movie/edit/{id}','MovieController@edit');
	Route::post('/movie/update','MovieController@update');
	Route::post('/movie/delete','MovieController@delete');


	Route::get('/theater','TheaterController@show');
	Route::get('/theater/add','TheaterController@add');
	Route::post('/theater/insert','TheaterController@insert');
	Route::get('/theater/edit/{id}','TheaterController@edit');
	Route::post('/theater/update','TheaterController@update');
	Route::post('/theater/delete','TheaterController@delete');

	Route::get('/show','ShowController@showmovies');
	Route::get('/show/add','ShowController@add');
	Route::post('/show/insert','ShowController@insert');
	Route::get('/show/edit/{id}','ShowController@edit');
	Route::post('/show/update','ShowController@update');
	Route::post('/show/delete','ShowController@delete');

});
