<?php
namespace Larabook\Statuses;

/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 9/6/16
 * Time: 7:41 AM
 */
class PostStatusCommand
{
    public $body;

    function __construct($body)
    {
        $this -> body = $body;
    }


}