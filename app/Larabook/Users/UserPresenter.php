<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/12/16
 * Time: 4:59 AM
 */

namespace Larabook\Users;


use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter
{
    function gravatar($size = 30)
    {
        $email = md5($this->email);

        return "//www.gravatar.com/avatar/{email}?s={$size}";
    }

}