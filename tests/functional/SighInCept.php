<?php

$I = new FunctionalTester($scenario);

$I->am('a larabook member');
$I->wantTo('Login to my larabook account');

$I->signIn();

$I->seeInCurrentUrl('/statuses');
$I->see('Post a Status');

//$I->assertTrue(Auth::check());