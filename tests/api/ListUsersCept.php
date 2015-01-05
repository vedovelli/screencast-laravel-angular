<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('retrive the FIRST page containing 10 users');

$I->sendGET('user');

$I->seeResponseIsJson();

$I->seeResponseContainsJson([
	'per_page' => 9,
	'current_page' => 1,
	'from' => 1,
	'to' => 9,
]);