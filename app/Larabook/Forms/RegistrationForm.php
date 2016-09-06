<?php
namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 9/3/16
 * Time: 2:30 PM
 */
//
class RegistrationForm extends FormValidator
{
    protected $rules = [
        'username' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
    ];

}