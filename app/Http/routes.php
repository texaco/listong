<?php

// Authentication routes...
Route::get('auth/login', [
	'uses' 	=> 'Auth\AuthController@getLogin',
	'as'	=> 'login'
	]);
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', [
	'uses'	=> 'Auth\AuthController@logout',
	'as'	=> 'logout'
	]);

// Registration routes...
Route::get('auth/register', [
	'uses'	=> 'Auth\AuthController@getRegister',
	'as'	=> 'register'
	]);
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', [
	'uses'	=> 'Auth\PasswordController@getEmail',
	'as'	=> 'email'
	]);
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Front-End routes...
Route::get('/','FrontController@index');

// Back-End routes...
Route::get('admin','BackController@index');

// ONG Controller routes...
Route::resource('ong','OngController');
Route::get('listing','OngController@listing');



Route::group(['middleware' => ['web']], function () {
    // your routes here
});