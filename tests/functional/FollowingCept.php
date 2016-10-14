<?php 
$I = new FunctionalTester($scenario);
$I->am('a Larabook user');
$I->wantTo('I want to follow other users and see their statuses on my profile');

$I->haveAnAccount(['username'=>'OtherUser']);
$I->signIn();

$I->click('Users');
$I->click('OtherUser');

$I->seeCurrentUrlEquals('/@OtherUser');
$I->click('Follow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');

$I->see('You are following other user');
$I->dontSee('Follow OtherUser');


//Expectation