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
	Route::get('/categories/create','CategoryController@create')->name('categoriesCreate');
	Route::post('/categories/store','CategoryController@store')->name('categoriesStore');
	
?>