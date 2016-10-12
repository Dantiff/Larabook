<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 9/6/16
 * Time: 9:28 AM
 */

namespace Larabook\Statuses;

use Laracasts\Commander\CommandHandler;
use Larabook\Users\UserRepository;
use Laracasts\Commander\Events\DispatchableTrait;
use Larabook\Statuses\Status;


class PublishStatusCommandHandler implements CommandHandler
{
    use DispatchableTrait;

    /**
     * @var StatusRepository
     */
    protected $statusRepository;

    /**
     * PublishStatusCommandHandler constructor.
     * @param $statusRepository
     */
    public function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }


    /**
     * @param $command
     */
    public function handle($command)
    {
      $status = Status::publish($command->body);

      $status = $this->statusRepository->save($status, $command->userId);

      $this->dispatchEventsFor($status);

      return $status;
    }
}