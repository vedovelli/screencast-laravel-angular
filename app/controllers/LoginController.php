<?php

class LoginController extends \BaseController {

	public function login()
	{
		extract(Input::only('email', 'password', 'remember_me'));

		if (Auth::attempt(array('email' => $email, 'password' => $password), $remember_me))
		{
			return Redirect::home();
		} else {

			return Redirect::back()->withInput()->with('error', 'E-mail ou senha inválidos');
		}
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::home();
	}

}