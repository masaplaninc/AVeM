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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ponudba', function () {
    return view('ponudba');
});

Route::get('/onas', function () {
    return view('onas');
});


Route::get('/kontakt', function () {
    return view('kontakt');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('profil', 'ProfileController@profil');

Route::get('uredisliko', 'ProfileController@urediprofil');
Route::post('uredisliko', 'ProfileController@update_avatar');

Route::group(['middleware' => 'web'], function () {
Route::get('/urediprofil', 'EditprofileController@editprofile');
Route::post('/urediprofil', 'EditprofileController@saveeditprofile');

});


//Route::get('/profile/{username}', 'ProfileController@profile');
//Route::post('profile/{username}', 'ProfileController@update_avatar');


