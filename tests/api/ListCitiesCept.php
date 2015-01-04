<?php 

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('retrive the list of the cities gathered from the registered users');

$I->sendGET('cities');

$I->seeResponseIsJson();

$I->seeResponseContainsJson([
	'success' => true,
	'description' => "The list of users' cities"
]);