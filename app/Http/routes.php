<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::resource('contacts', 'ContactsController');

Route::resource('groups', 'GroupsController');

Route::get('phones/create/{id}', 'PhonesController@create');

Route::resource('phones', 'PhonesController',
    ['only' => ['store', 'destroy']]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
