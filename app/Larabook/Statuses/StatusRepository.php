<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/11/16
 * Time: 6:44 PM
 */

namespace Larabook\Statuses;
 use Illuminate\Support\Facades\Auth;
 use Larabook\Users\User;

 class StatusRepository
{

    public function getAllForUser(User $user)
    {
        return $user->statuses();

    }

     /**
      * Save a status for specific user
      * @param Status $status
      * @param $userId
      * @return mixed
      */
     public function save(Status $status, $userId)
    {
        return User::findOrFail($userId)
            ->statuses()
            ->save($status);

    }

}