<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/17/16
 * Time: 8:35 AM
 */

namespace Larabook\Statuses;


class Comment extends \Eloquent
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'status_id', 'body'];

    /**
     * User can have multiple comments
     *
     * @return mixed
     */
    public function owner()
    {
        return $this->belongsTo('Larabook\Users\User', 'user_id');
    }


    /**
     * @param $body
     * @param $statusId
     * @return static
     */
    public static function leave($body, $statusId)
    {
        return new static([
            'body'=>$body,
            'status_id'=>$statusId
        ]);
    }
}