<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/12/16
 * Time: 4:59 AM
 */

namespace Larabook\Users;


class UserPresenter
{
    function gravatar($size = 30)
    {
        $email = md5($this->email);

        return "//www.gravatar.com/avatar/{email}?s={$size}";
    }

}