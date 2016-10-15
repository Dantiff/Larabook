<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/15/16
 * Time: 4:27 AM
 */

namespace Larabook\Mailers;
use Illuminate\Support\Facades\Mail as Mail;

abstract class Mailer
{

    /**
     * @var Mail
     */
    private $mail;

    /**
     * Mailer constructor.
     * @param $mail
     */
    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }


    /**
     * Defailt method for sending a queue of emails
     *
     * @param $user
     * @param $subject
     * @param $view
     * @param $data
     */
    public function sendTo($user, $subject, $view, $data = [])
    {

        $this->mail->queue($view, $data, function ($message) use ($user, $subject)
        {
            $message->to($user->email)->subject($subject);
        });

    }
}