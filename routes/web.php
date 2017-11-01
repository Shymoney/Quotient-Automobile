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



Route::get('/index', function() {

		return view('index');
});

Route::get('/login', function() {

		return view('login');
});

Route::get('/signup', function(){
		
		return view('signup');
});

Route::get('/recover-password', function(){
	
		return view('recover-password');
});

Route::get('/layouts.master', function(){
	
		return view('layouts.master');
});

Route::get('/help', function(){
		return view('help');


});

//Route::post('/signup', 'PostController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


