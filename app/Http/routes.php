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

//Route::controllers([
//    '/' => 'WelcomeController@index',
//    'contact' => 'WelcomeController@contact',
//]);
//
//Route::controllers([
//    'article' => 'ArticlesController@index',
//    'article/about' => 'ArticlesController@about',
//]);

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


//article test
Route::get('articles', 'ArticlesController@index');
Route::get('articles/about', 'ArticlesController@about');

Route::get('articles/create', 'ArticlesController@create');// form表单
//Route::post('articles/create', 'ArticlesController@store');// form表单
Route::post('articles/getForm', 'ArticlesController@store');    //用于接受form数据用
Route::get('articles/{id}/edit', 'ArticlesController@edit');
Route::resource('articles', 'ArticlesController');


Route::post('foo/bar', function(){
    return 'Hello World foobar';
});
Route::any('foo', function(){
    return 'Hello World foo';
});


//Route::get('articles/{id}', 'ArticlesController@show');





Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
