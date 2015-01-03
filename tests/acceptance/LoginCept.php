<?php 
$I = new AcceptanceTester($scenario);

$I->am('a user');

$I->wantTo('log in');

$I->logIn();
