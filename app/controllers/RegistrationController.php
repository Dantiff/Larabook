<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;
use Larabook\Core\CommandBus;

class RegistrationController extends \BaseController {



    use CommandBus;



    private $registrationForm;



    function __construct(RegistrationForm $registrationForm)
    {

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

        $user = $this->execute (
            new RegisterUserCommand($username, $email, $password)
        );


        Auth::login($user);

        Flash::message('Glad to have you as a larabook member!');

		return Redirect::home()->with('flash_message', 'Welcome aboard');
	}



}
