<?php
namespace Larabook\Core;


use App;
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 9/6/16
 * Time: 11:46 AM
 */
trait CommandBus
{
    public function execute($command)
    {
        return $this->getCommandBus()->execute($command);
    }

    /**
     * @return mixed
     */
    public function getCommandBus()
    {
        return App::make('Laracasts\Commander\CommandBus');
    }

}