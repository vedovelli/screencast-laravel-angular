<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('create a new user');

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

$I->seeResponseIsJson();

$I->seeResponseContainsJson(['success'=> true]);