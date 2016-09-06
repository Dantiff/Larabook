<?php
namespace Larabook\Registration;

/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 9/6/16
 * Time: 7:41 AM
 */
class RegisterUserCommand
{
    public $username;

    public $email;

    public $password;


    function __construct($username, $email, $password)
    {
        $this -> username = $username;
        $this -> email = $email;
        $this -> password = $password;
    }


}