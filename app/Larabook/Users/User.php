<?php

namespace Larabook\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Larabook\Registration\Events\UserRegistered;
use Eloquent, Hash;
use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;


class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, EventGenerator, PresentableTrait;

    /**
     * @var array
     */
    protected $fillable = ['username', 'email', 'password'];
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

    /**
     * @var string
     */
    protected $presenter = 'Larabook\Users\UserPresenter';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


    /**
     * @param $password
     */
    public  function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    /**
     * A user can have many statuses
     *
     * @return mixed
     */
    public function statuses()
    {
        return $this->hasMany('Larabook\Statuses\Status');
    }

    /**
     * @param $username
     * @param $email
     * @param $password
     * @return static
     */
    public  static  function register($username, $email, $password)
    {
        $user = new static(compact('username', 'email', 'password'));


        $user->raise(new UserRegistered($user));

        return $user;
    }


}
