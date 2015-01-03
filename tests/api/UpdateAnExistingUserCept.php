<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('update and existing user');

$I->createAUser();

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

$id = $I->grabDataFromJsonResponse('user.id');

$I->sendPUT("user/{$id}", ['fullname' => 'Bonifacio']);

$I->seeResponseContainsJson([
	'success'=> true, 
	'description'=> 'Recently updated user', 
	'user' => [
		'fullname' => 'Bonifacio',
		'username' => 'vedovelli',
		'email' => 'vedovelli@gmail.com',
		'city' => 'Santo André',
		'state' => 'SP',
	]
]);
