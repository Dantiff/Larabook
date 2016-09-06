<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 9/6/16
 * Time: 9:28 AM
 */

namespace Larabook\Registration;

use Laracasts\Commander\CommandHandler;
use Larabook\Users\User;
use Larabook\Users\UserRepository;
use Laracasts\Commander\Events\DispatchableTrait;


class RegisterUserCommandHandler implements CommandHandler
{
    use DispatchableTrait;

    protected $repository;

    /**
     * RegisterUserCommandHandler constructor.
     * @param $repository
     */
    function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }


    public function handle($command)
    {
        $user = User::register(
            $command->username, $command->email, $command->password
        );

        $this->repository->save($user);

        $this->dispatchEventsFor($user);

        return $user;
    }
}