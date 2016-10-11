<?php
namespace Helper;

use Laracasts\TestDummy\Factory as TestDummy;
use Larabook\Users\User;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Functional extends \Codeception\Module
{
    //create a login function
    public function signIn()
    {
        $email = 'foo@example.com';
        $password = 'foo';
        $this->haveAnAccount(compact('email', 'password'));

        $I = $this->getModule('laravel4');

        $I->amOnPage('/login');
        $I->fillField('email', $email);
        $I->fillField('password', $password);
        $I->click('Sign In');
    }

    public function haveAnAccount($overrides = [])
    {

         TestDummy::create('Larabook\Users\User', $overrides);
    }

}
