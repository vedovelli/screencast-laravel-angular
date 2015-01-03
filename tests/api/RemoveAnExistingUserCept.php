<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('remove an existing user');

$I->createAUser();

$id = $I->grabDataFromJsonResponse('user.id');

$I->sendDELETE("user/{$id}");

$I->seeResponseIsJson();

$I->seeResponseContainsJson([
	'success'=> true, 
	'description'=> 'Recently deleted user', 
	'user' => [
		'fullname' => 'Fabio Vedovelli',
		'username' => 'vedovelli',
		'email' => 'vedovelli@gmail.com',
		'city' => 'Santo André',
		'state' => 'SP',
	]
]);

