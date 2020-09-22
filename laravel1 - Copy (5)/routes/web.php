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
	Route::get('/','HomeController@welcome');
	Route::get('/categories','CategoryController@index')->name('categories');
	Route::get('/categories/create','CategoryController@create')->name('categoryCreate');
	Route::post('/categories/store','CategoryController@store')->name('categoryStore');
	Route::get('/categories/{category}','CategoryController@show')->name('categoryShow');
	Route::get('/categories/edit/{category}','CategoryController@edit')->name('categoryEdit');
	Route::put('/categories/update/{category}','CategoryController@update')->name('categoryUpdate');
	Route::get('/categories/delete/{category}','CategoryController@destroy')->name('categoryDelete');
?>