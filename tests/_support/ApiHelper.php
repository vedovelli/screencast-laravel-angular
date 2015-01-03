<?php
namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class ApiHelper extends \Codeception\Module
{
	
	public function createAUser($data = [])
	{
		$userData = array_merge([
			'fullname' => 'Fabio Vedovelli',
			'username' => 'vedovelli',
			'email' => 'vedovelli@gmail.com',
			'password' => '123456',
			'city' => 'Santo André',
			'state' => 'SP'], $data);

		$I = $this->getModule('REST');

		$I->sendPOST('user', $userData);


	}

}
