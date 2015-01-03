<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('remove an existing user');

$I->sendDELETE("user/954");

$I->seeResponseIsJson();

$I->seeResponseContainsJson([
	'success'=> true, 
	'description'=> 'Recently deleted user', 
	'user' => [
		'fullname' => 'Adam Bowman',
		'username' => 'abowmanqh',
		'email' => 'abowmanqh@bravesites.com',
		'city' => 'Jackson',
		'state' => 'MS',
	]
]);