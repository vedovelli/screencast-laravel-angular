<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('retrive the SECOND page containing 10 users');

$I->sendGET('user?page=2');

$I->seeResponseIsJson();

$I->seeResponseContainsJson([
	'per_page' => 3,
	'current_page' => 2,
	'from' => 4,
	'to' => 6,
]);