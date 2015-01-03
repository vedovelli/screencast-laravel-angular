<?php 

$I = new AcceptanceTester($scenario);

$I->am('a user');

$I->wantTo('reset my passaword');

$I->amOnRoute('login_path');

$I->click('Esqueceu a senha?');

$I->see('Password Reset', 'h3');

$I->fillField('email', 'vedovelli@gmail.com');

$I->click('Enviar link troca de senha');

$I->see('Link enviado com sucesso para o e-mail informado');