<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('create 20 users and retrieve a list of 10 users');

for ($i=0; $i < 20; $i++) { 
	
	$I->createAUser();
}

$I->sendGET('user');

$I->seeResponseIsJson();

$I->seeResponseContainsJson([
	'success'=> true, 
	'description'=> 'Paginated list of all users',
	'meta' => [
		'total' => 10
	],
]);