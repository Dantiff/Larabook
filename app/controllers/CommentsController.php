<?php

use Laracasts\Commander\CommanderTrait;
use Larabook\Statuses\LeaveCommentsOnStatusCommand;
class CommentsController extends \BaseController
{

    use CommanderTrait;

	/**
	 * Leave new comment
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = array_add(Input::get(), 'user_id', Auth::id());

        $this->execute(LeaveCommentsOnStatusCommand::class, $input);

        return Redirect::back();
	}



}
