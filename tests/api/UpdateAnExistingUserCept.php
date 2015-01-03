<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('update and existing user');

$I->sendPUT("user/954", ['fullname' => 'Bonifacio']);

$I->seeResponseContainsJson([
	'success'=> true, 
	'description'=> 'Recently updated user', 
	'user' => [
		'fullname' => 'Bonifacio',
		'username' => 'abowmanqh',
		'email' => 'abowmanqh@bravesites.com',
		'city' => 'Jackson',
		'state' => 'MS',
	]
]);