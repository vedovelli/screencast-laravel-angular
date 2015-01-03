<?php
namespace Codeception\Module;

class AcceptanceHelper extends \Codeception\Module
{

	public function logIn()
	{
		$I = $this->getModule('Laravel4');

		$I->amOnRoute('login_path');

		$I->fillField('email', 'vedovelli@gmail.com');

		$I->fillField('password', '123456');

		$I->click('Log In');

		$I->see('Waiting for the Javascript magic to happen!', 'h1');
	}

}