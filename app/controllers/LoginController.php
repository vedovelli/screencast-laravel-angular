<?php

class LoginController extends \BaseController {

	public function login()
	{
		extract(Input::only('email', 'password', 'remember_me'));

		if (Auth::attempt(array('email' => $email, 'password' => $password), $remember_me))
		{
			return Redirect::home();
		}
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::home();
	}

}