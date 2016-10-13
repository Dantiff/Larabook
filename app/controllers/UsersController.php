<?php

use Larabook\Users\UserRepository;
class UsersController extends \BaseController
{

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * UsersController constructor.
     * @param $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    /**
	 * Display a listing of the Users.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->userRepository->getPaginated();

        return view::make('users.index')->withUsers($users);
	}


    /**
     * @param $username
     * @return mixed
     */
    public function show($username)
    {
        $user = $this->userRepository->findByUsername($username);

        return view::make('users.show')->withUser($user);
    }

}
