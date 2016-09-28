<?php

$I = new FunctionalTester($scenario);

$I-> am('a larabook member');
$I->wantTo('Login to my larabook account');

$I->haveAnAccount('email' => 'foo@example.com', 'password' => 'foo');
$I->amOnPage('/login');
$I->fillField('email', 'foo@example.com');
$I->fillField('password', 'foo');
$I->click('Sign In');

$I->seeInCurrentUrl('/statuses');
$I->see('Welcome back');