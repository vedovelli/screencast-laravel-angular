<?php
namespace Codeception\Module;

class AcceptanceHelper extends \Codeception\Module
{

	public function logIn($credentials = [])
	{
		$local_credentials = array_merge([
			'email' => 'vedovelli@gmail.com', 
			'password' => '123456'], $credentials);

		$I = $this->getModule('Laravel4');

		$I->amOnRoute('login_path');

		$I->fillField('email', $local_credentials['email']);

		$I->fillField('password', $local_credentials['password']);

		$I->click('Log In');

	}

}