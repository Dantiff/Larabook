<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/15/16
 * Time: 4:37 AM
 */

namespace Larabook\Mailers;

use Larabook\Users\User;

class UserMailer extends Mailer
{

    /**
     * Send notification email to user after registration
     *
     * @param User $user
     */
    public function sendWelcomeMessageTo(User $user)
    {
        $subject = 'Welcome to Larabook';
        $view = 'emails.registration.confirm';

        return $this->sendTo($user, $subject, $view);

    }

}