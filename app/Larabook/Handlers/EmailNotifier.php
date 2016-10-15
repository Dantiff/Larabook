<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/15/16
 * Time: 4:24 AM
 */

namespace Larabook\Handlers;


use Larabook\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventListener;
use Larabook\Mailers\UserMailer;

class EmailNotifier extends EventListener
{
    /**
     * @var UserMailer
     */
    private $mailer;

    /**
     * EmailNotifier constructor.
     * @param $mailer
     */
    public function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param UserRegistered $event
     */
    public function whenUserHasRegistered(UserRegistered $event)
    {
        $this->mailer->sendWelcomeMessageTo($event->user);

    }

}