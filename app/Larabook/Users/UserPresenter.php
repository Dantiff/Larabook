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
    /**
     * @param int $size
     * @return string
     */
    function gravatar($size = 30)
    {
        $email = md5($this->email);

        return "//www.gravatar.com/avatar/{email}?s={$size}";
    }


    /**
     * @return string
     */
    public function followerCount()
    {
        $count = $this->entity->followers()->count();

        $plural = str_plural('Follower', $count);

        return "{$count} {$plural}";
    }


    /**
     * @return string
     */
    public function statusCount()
    {
        $count = $this->entity->statuses()->count();

        $plural = str_plural('Status', $count);

        return "{$count} {$plural}";
    }

}