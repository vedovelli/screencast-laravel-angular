<?php 
$I = new AcceptanceTester($scenario);

$I->am('user');

$I->wantTo('log in with wrong credentials');

$I->logIn(['email' => 'vedovelli2@gmail.com', 'password' => '123456']);

$I->see('E-mail ou senha inválidos');

$I->logIn(['email' => 'vedovelli@gmail.com', 'password' => '123456789']);

$I->see('E-mail ou senha inválidos');