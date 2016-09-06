<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 9/6/16
 * Time: 9:57 AM
 */

namespace Larabook\Users;




class UserRepository
{

    public function save(User $user)
    {
        return $user-> save();
    }
}