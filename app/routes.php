<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('about', function()
{
  return View::make('about');
});



Route::resource('users', 'UserController');
Route::get('/register', 'UserController@showUserRegistration');
Route::post('/register', 'UserController@saveUser');