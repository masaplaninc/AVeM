<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('/test', function(){
	return 'hello';
});

Route::group(['prefix'=>'auth'], function(){

	Route::get('login', [
		'as' => 'get_login',
		'uses' => 'Auth\LoginController@getlogin'
		]
	);

	Route::post('login', [
		'as' => 'post_login',
		'uses' => 'Auth\LoginController@postlogin'
	]);
});

