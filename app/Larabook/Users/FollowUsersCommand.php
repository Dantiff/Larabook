<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/14/16
 * Time: 4:08 AM
 */

namespace Larabook\Users;


class FollowUsersCommand
{
    public $userId;

    public $userIdToFollow;

    /**
     * FollowUsersCommand constructor.
     * @param $userId
     * @param $userIdToFollow
     */
    public function __construct($userId, $userIdToFollow)
    {
        $this->userId = $userId;

        $this->userIdToFollow = $userIdToFollow;
    }


}