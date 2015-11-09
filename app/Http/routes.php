<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
//dodo 2015 1109 1351
Route::get('contact', 'WelcomeController@contact');
//dodo 2015 1109 1416
//Route::get('about', 'PagesController@index');
Route::get('about', 'PagesController@about');
//transport some data array test from controller to view
Route::get('about11', 'PagesController@about11');
Route::get('about12', 'PagesController@about12');
Route::get('about13', 'PagesController@about13');
//use blade test
Route::get('about2', 'PagesController@about2');
//use blade muti @yield
Route::get('about21', 'PagesController@about21');
Route::get('about22', 'PagesController@about22');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
