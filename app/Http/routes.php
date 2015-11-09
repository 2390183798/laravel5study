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
Route::get('about11', 'PagesController@about11');
Route::get('about12', 'PagesController@about12');
Route::get('about13', 'PagesController@about13');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
