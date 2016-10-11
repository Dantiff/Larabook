<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/11/16
 * Time: 7:53 PM
 */

namespace Larabook\Forms;


use Laracasts\Validation\FormValidator;

class PublishStatusForm extends FormValidator
{
    /**
     * Validation rules for publish status form
     *
     * @var array
     */
    protected $rules = [
        'body' => 'required'
    ];

}