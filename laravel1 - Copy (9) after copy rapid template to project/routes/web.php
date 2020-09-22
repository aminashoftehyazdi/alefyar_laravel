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
	Auth::routes();
	Route::get('/','HomeController@welcome');
	Route::get('/categories','CategoryController@index')->name('categories');
	Route::get('/categories/create','CategoryController@create')->name('categoryCreate')->middleware('auth');
	Route::post('/categories/store','CategoryController@store')->name('categoryStore')->middleware('auth');
	Route::get('/categories/{category}','CategoryController@show')->name('categoryShow');
	Route::get('/categories/edit/{category}','CategoryController@edit')->name('categoryEdit')->middleware('auth');
	Route::put('/categories/update/{category}','CategoryController@update')->name('categoryUpdate')->middleware('auth');
	Route::get('/categories/delete/{category}','CategoryController@destroy')->name('categoryDelete')->middleware('auth');
?>