<?php
namespace Larabook\Statuses;

/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 9/6/16
 * Time: 7:41 AM
 */
class PublishStatusCommand
{
    public $body;

    public $userId;

    function __construct($body, $userId)
    {
        $this -> body = $body;

        $this->userId = $userId;
    }


}