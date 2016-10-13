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

    /**
     * @param User $user
     * @return mixed
     */
    public function save(User $user)
    {
        return $user-> save();
    }

    /**
     * Get a paginated list of all users
     *
     * @param int $showMany
     * @return mixed
     */
    public function getPaginated($showMany = 200)
    {
        return User::paginate($showMany);
    }
}