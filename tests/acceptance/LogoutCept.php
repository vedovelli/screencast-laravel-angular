<?php 
$I = new AcceptanceTester($scenario);

$I->am('a user');

$I->wantTo('log out');

$I->logIn();

$I->see('Waiting for the Javascript magic to happen!', 'h1');

$I->amOnRoute('home');

$I->logout();

$I->amOnRoute('login_path');