<?php
namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class AcceptanceHelper extends \Codeception\Module
{

	public function logIn()
	{
		$I = $this->getModule('Laravel4');

		$I->amOnRoute('login_path');

		$I->fillField('email', 'vedovelli@gmail.com');

		$I->fillField('password', '123456');

		$I->click('Log In');

		$I->amLoggedAs(['username' => 'vedovelli']);
	}
}
