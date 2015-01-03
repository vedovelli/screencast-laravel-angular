<?php 
$I = new AcceptanceTester($scenario);

$I->am('user');

$I->wantTo('log in');

$I->logIn();