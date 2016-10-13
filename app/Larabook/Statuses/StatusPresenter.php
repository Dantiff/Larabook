<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/13/16
 * Time: 8:32 AM
 */

namespace Larabook\Statuses;


use Laracasts\Presenter\Presenter;

class StatusPresenter extends Presenter
{

    /**
     * Present time when the status was created
     *
     * @return mixed
     */
    public function timeSincePublished()
    {
        return$this->created_at->diffForHumans();
    }
}