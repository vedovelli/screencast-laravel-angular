<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('retrive the SECOND page containing 10 users');

$I->sendGET('user?limit=6&page=2');

$I->seeResponseIsJson();

$I->seeResponseContainsJson([
	'per_page' => 6,
	'current_page' => 2,
	'from' => 7,
	'to' => 12,
]);