<?php

use Larabook\Users\FollowUsersCommand;

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
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($idOfUserToUnfollow)
	{
		//
	}


}
