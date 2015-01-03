<?php 
$I = new AcceptanceTester($scenario);

$I->am('a user');

$I->wantTo('log out');

$I->logIn();

$I->amOnRoute('home');

$I->logout();

$I->amOnRoute('login_path');