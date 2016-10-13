<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 9/6/16
 * Time: 9:57 AM
 */

namespace Larabook\Users;

use Larabook\Users\User;


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
    public function getPaginated($showMany = 20)
    {
        return User::orderBy('username', 'asc')->simplePaginate($showMany);
    }

    /**
     * Find user by username
     *
     * @param $username
     * @return mixed
     */
    public function findByUsername($username)
    {
        return User::with(['statuses'=>function($query)
            {
                $query->latest();

            }])->whereUsername($username)->first();
    }
}