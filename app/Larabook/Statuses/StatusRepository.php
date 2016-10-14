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

     /**
      * Get all statuses associated with a user
      *
      * @param User $user
      * @return mixed
      */
     public function getAllForUser(User $user)
    {
        return $user->statuses()->with('user')->latest()->get();

    }


     /**
      * Get feed for a user
      *
      * @param User $user
      * @return mixed
      */
     public function getFeedForUser(User $user)
    {
        $userIds = $user->follows()->lists('followed_id');

        $userIds[] = $user->id;

        return Status::whereIn('user_id', $userIds)->latest()->get();

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