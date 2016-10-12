<?php
namespace Larabook\Statuses\Events;

/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/11/16
 * Time: 6:37 PM
 */
class StatusWasPublished
{
    /**
     * @var
     */
    public $body;

    /**
     * StatusWasPublished constructor.
     * @param $body
     */
    public function __construct($body)
    {
        $this->body = $body;
    }


}