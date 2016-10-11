<?php


class PostStatusesCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->am('A larabook member');
        $I->wantTo('Want to post statuses to my larabook account');

        $I->signIn();

        $I->amOnPage('statuses');

        $I->postAStatus('body', 'My first post');

        $I->seeCurrentUrlEquals('/statuses');

        $I->see('My first dtatus');
    }
}
