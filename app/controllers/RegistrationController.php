<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;

class RegistrationController extends \BaseController
{

    /**
     * @var RegistrationForm
     */
    private $registrationForm;


    /**
     * RegistrationController constructor.
     * @param RegistrationForm $registrationForm
     */
    function __construct(RegistrationForm $registrationForm)
    {

        $this->registrationForm = $registrationForm;

        $this->beforeFilter('guest');
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

        $user = $this->execute(RegisterUserCommand::class);

        Auth::login($user);

        Flash::message('Glad to have you as a larabook member');

		return Redirect::home()->with('flash_message', 'Welcome aboard');
	}



}
