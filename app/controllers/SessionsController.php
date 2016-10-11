<?php

use Larabook\Forms\SignInForm;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash as Flash;
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

        //fetch the form
        $formData = Input::only('email', 'password');

        //validate the form
        //if invalid, then go back
        $this->signInForm->validate($formData);


        //if is valid, the try to sign in
        if (Auth::attempt($formData))
        {

            Flash::message('Welcome back!');
            //redirect to statuses
            return Redirect::to('statuses');

        }

    }


    public function destroy()
    {
        Auth::logout();

        Flash::message('You have now been logged out');

        return Redirect::home();
    }


}
