<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('Retrive a list containing 10 users');

$I->sendGET('user');

$I->seeResponseIsJson();

$I->seeResponseContainsJson([
	'success'=> true, 
	'description'=> 'Paginated list of all users',
	'meta' => [
		'total' => 10
	],
]);