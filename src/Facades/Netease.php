<?php

namespace Superman2014\Netease\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Superman2014\Netease\NeteaseAPI
 */
class Netease extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'netease';
    }
}
