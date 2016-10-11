<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 9/28/16
 * Time: 9:53 PM
 */

namespace Larabook\Forms;


use Laracasts\Validation\FormValidator;

class SignInForm extends FormValidator
{
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

}
