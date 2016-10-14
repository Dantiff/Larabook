<?php 
$I = new FunctionalTester($scenario);
$I->am('a Larabook user');
$I->wantTo('I want to follow other users and see their statuses on my profile');

$I->haveAnAccount(['username'=>'OtherUser']);
$I->signIn();

$I->click('Users');
$I->click('OtherUser');

$I->seeCurrentUrlEquals('/@OtherUser');

//When I follow other users
$I->click('Follow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');

$I->see('You are following other user');
$I->dontSee('Follow OtherUser');
$I->see('Unfollow OthersUser');

//When i unfollow other users
$I->click('Unfollow OthersUser');
$I->seeCurrentUrlEquals('/@OtherUser');
$I->dontSee('Unfollow OtherUser');

//Expectation