<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;
use Laracasts\Commander\CommandBus;

class RegistrationController extends \BaseController {



    private $registrationForm;

    private $commandBus;

    function __construct(CommandBus $commandBus, RegistrationForm $registrationForm)
    {
        $this -> commandBus = $commandBus;
        $this->registrationForm = $registrationForm;
    }




	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->registrationForm->validate(Input::all());

	    extract(Input::only('username', 'email', 'password'));

        $user = $this->commandBus->execute (
            new RegisterUserCommand($username, $email, $password)
        );


        Auth::login($user);

		return Redirect::home();
	}



}
