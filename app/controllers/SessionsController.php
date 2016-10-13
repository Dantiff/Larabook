<?php

use Larabook\Forms\SignInForm;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash as Flash;
use Illuminate\Support\Facades\Redirect;
class SessionsController extends \BaseController
{
    private $signInForm;

    /**
     * SessionsController constructor.
     * @param SignInForm $signInForm
     */
    public function __construct(SignInForm $signInForm)
    {
        $this->signInForm = $signInForm;

        $this->beforeFilter('guest', ['except'=>'destroy']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return View::make('sessions.create');
    }


    /**
     * fetch the form
     * validate the form
     *
     *
     * @return Response
     */
    public function store()
    {

        $formData = Input::only('email', 'password');

        $this->signInForm->validate($formData);

        if (! Auth::attempt($formData))
        {
            Flash::message('We were unable to sign you in. Please check your credentials and try again');

            return Redirect::back()->withInput();
        }

        Flash::message('Welcome back');

        return Redirect::intended('statuses');


    }


    public function destroy()
    {
        Auth::logout();

        Flash::message('You have now been logged out');

        return Redirect::home();
    }


}
