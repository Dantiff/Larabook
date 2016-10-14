<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/14/16
 * Time: 4:08 AM
 */

namespace Larabook\Users;


use Laracasts\Commander\CommandHandler;
use Larabook\Users\UserRepository;

class FollowUsersCommandHandler implements CommandHandler
{
    protected $userRepo;

    /**
     * FollowUsersCommandHandler constructor.
     * @param $userRepo
     */
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }


    /**
     * follow users command handler
     *
     * @return user
     *
     * @param $command
     */
    public function handle($command)
    {
        $user = $this->userRepo->findById($command->userId);

        $this->userRepo->follow($command->userIdToFollow, $user);

        return $user;
    }

}