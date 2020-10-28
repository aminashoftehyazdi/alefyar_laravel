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
	Route::get('/','HomeController@index')->name('home');
	Route::get('/categories','CategoryController@index')->name('cateS')->middleware('auth');
	Route::get('/categories/create','CategoryController@create')->name('catCreate')->middleware('auth');
	Route::post('/categories/store','CategoryController@store')->name('catStore');
	Route::get('/categories/show/{category}','CategoryController@show')->name('catShow')->middleware('auth');
	Route::get('/categories/edit/{category}','CategoryController@edit')->name('catEdit')->middleware('auth');
	Route::put('/categories/put/{category}','CategoryController@update')->name('catUpdate');
	Route::get('/categories/delete/{category}','CategoryController@destroy')->name('catDelete')->middleware('auth');
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
