<?php

View::share('currentUser', Auth::user());

Route::get('/', [
	'before' => 'auth', 
	'as' => 'home', 
	'uses' => 'HomeController@home'
]);

Route::controller('password', 'RemindersController');

Route::get('login', [
	'as' => 'login_path', 
	function() 
	{
		return View::make('login.login');
	}
]);



Route::get('logout', [
	'as' => 'logout_path',
	'uses' => 'LoginController@logout'
]);



Route::post('login', [
	'as' => 'login_path',
	'uses' => 'LoginController@login'
]);



Route::group(array('prefix' => 'api'), function() {
 
	Route::resource('user', 'UserController');	
});

