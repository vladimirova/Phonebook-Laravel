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

Route::get('home', 'HomeController@index');

Route::resource('contacts', 'ContactsController');

Route::resource('groups', 'GroupsController');

//Route::get('phones/{id}', 'PhonesController@index');

Route::get('phones/create/{id}', 'PhonesController@create');

Route::resource('phones', 'PhonesController',
    ['only' => ['store', 'destroy']]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
