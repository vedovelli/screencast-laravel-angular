<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('create a new user');

$userData = [
	'fullname' => 'Fabio Vedovelli',
	'username' => 'vedovelli',
	'email' => 'vedovelli@gmail.com',
	'password' => '123456',
	'city' => 'Santo André',
	'state' => 'SP'];

$I->sendPOST('user', $userData);

$I->seeResponseContainsJson([
	'success'=> true, 
	'description'=> 'Recently saved user', 
	'user' => [
		'fullname' => 'Fabio Vedovelli',
		'username' => 'vedovelli',
		'email' => 'vedovelli@gmail.com',
		'city' => 'Santo André',
		'state' => 'SP',
	]
]);