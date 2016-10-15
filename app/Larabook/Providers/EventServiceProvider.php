<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 10/15/16
 * Time: 4:48 AM
 */

namespace Larabook\Providers;


use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    /**
     *Register Larabook Event Listeners
     */
    public function register()
    {
        $this->app['events']->listen('Larabook.*', 'Larabook\Handlers\EmailNotifier');
    }

}