<?php 
$I = new AcceptanceTester($scenario);

$I->am('user');

$I->wantTo('log in');

$I->logIn();

$I->see('Waiting for the Javascript magic to happen!', 'h1');