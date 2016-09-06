<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 9/6/16
 * Time: 12:47 PM
 */

namespace Larabook\Registration\Events;

use Larabook\Users\User;


class UserRegistered
{
    public $user;

    /**
     * UserRegistered constructor.
     * @param $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }


}