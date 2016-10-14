<?php

use Larabook\Users\FollowUsersCommand;
use Larabook\Users\UnfollowUserCommand;

class FollowersController extends \BaseController {



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	    $input = array_add(Input::get(), 'userId', Auth::id());

	    $this->execute(FollowUsersCommand::class, $input);

        Flash::success('You are now following this user.');

        return Redirect::back();

	}


    /**
     * Unfollow a user
     *
     * @param $userIdToUnfollow
     * @return mixed
     */
    public function destroy($userIdToUnfollow)
	{
        $input = array_add(Input::get(), 'userId', Auth::id());

		$this->execute(UnfollowUserCommand::class, $input);

        Flash::success('You have now unfollowed this user.');

        return Redirect::back();
	}


}
