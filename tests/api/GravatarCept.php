<?php

$I = new ApiTester($scenario);

$I->am('consumer app');

$I->wantTo('retrive user gravatar');

$I->sendGET('gravatar/vedovelli@gmail.com');

$I->seeResponseIsJson();

$I->seeResponseContainsJson([
	'success' => true,
	'gravatar' => "http://www.gravatar.com/avatar/d41d8cd98f00b204e9800998ecf8427e?s=200"
]);