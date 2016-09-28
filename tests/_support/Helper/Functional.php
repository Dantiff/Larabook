<?php
namespace Helper;

use Laracasts\TestDummy\Factory as TestDummy;
use Larabook\Users\User;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Functional extends \Codeception\Module
{

    public function haveAnAccount($overrides = [])
    {

         TestDummy::create('Larabook\Users\User', $overrides);
    }

}
