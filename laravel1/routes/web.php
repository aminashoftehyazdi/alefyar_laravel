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
Route::get('/','indexController@index');
Route::get('/index','indexController@index');
Route::get('/welcome','indexController@welcome');
Route::get('/harchi','indexController@harchi');
Route::get('/yeki','indexController@avvali');

