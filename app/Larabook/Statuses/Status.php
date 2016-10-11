<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/11/16
 * Time: 4:52 AM
 */

namespace Larabook\Statuses;


class Status extends \Eloquent
{
    /*
     * Fillable fields for a new status
     */

    protected $fillable = ['body'];

}