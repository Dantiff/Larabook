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
use Larabook\Users\FollowableTrait;



class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, EventGenerator, PresentableTrait, FollowableTrait;

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
        return $this->hasMany('Larabook\Statuses\Status')->latest();
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

    /**
     * Check whether the provided user is the current user
     *
     * @param $user
     * @return mixed
     */
    public function is($user)
    {
        if (is_null($user)) return false;

        return $this->username == $user->username;
    }


    /**
     * @return mixed
     */
    public function comments()
    {
        return $this->hasMany('Larabook\Statuses\Comment');
        
    }


}
