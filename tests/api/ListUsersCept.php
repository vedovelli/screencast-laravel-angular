<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('retrive the FIRST page containing 6 users');

$I->sendGET('user?limit=6&page=1');

$I->seeResponseIsJson();

$I->seeResponseContainsJson([
	'per_page' => 6,
	'current_page' => 1,
	'from' => 1,
	'to' => 6,
]);