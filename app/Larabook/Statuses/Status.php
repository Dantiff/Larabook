<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/11/16
 * Time: 4:52 AM
 */

namespace Larabook\Statuses;


use Laracasts\Commander\Events\EventGenerator;
use Larabook\Statuses\Events\StatusWasPublished;

class Status extends \Eloquent
{
    use EventGenerator;
    /*
     * Fillable fields for a new status
     */

    protected $fillable = ['body'];

    /*
     * Publish a new  status
     */

    /**
     * @param $body
     * @return static
     */
    public static function publish($body)
    {
        $status = new static(compact('body'));

        $status->raise(new StatusWasPublished($body));

        return $status;
    }

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('Larabook\Users\User');
    }

}