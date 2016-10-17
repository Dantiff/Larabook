<?php namespace Larabook\Statuses;

use Laracasts\Commander\CommandHandler;
use Larabook\Statuses\StatusRepository;
class LeaveCommentsOnStatusCommandHandler implements CommandHandler
{

    private $statusRepo;

    /**
     * LeaveCommentsOnStatusCommandHandler constructor.
     * @param $statusRepo
     */
    public function __construct(StatusRepository $statusRepo)
    {
        $this->statusRepo = $statusRepo;
    }


    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        $comment = $this->statusRepo->leaveComment($command->user_id, $command->status_id, $command->body);

        return $comment;

    }

}