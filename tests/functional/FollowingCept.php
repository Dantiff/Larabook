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
$I->see('You are now following this user.');
$I->see('Follow OtherUser');
$I->dontSee('Unfollow OthersUser');

//When i unfollow other users
$I->seeCurrentUrlEquals('/@OtherUser');
$I->see('Unfollow OtherUser');
$I->click('Unfollow OtherUser');
$I->see('You have now unfollowed this user.');
$I->seeCurrentUrlEquals('/@OtherUser');