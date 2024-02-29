<?php

namespace C6Digital\LaravelForceHttps\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \C6Digital\LaravelForceHttps\LaravelForceHttps
 */
class LaravelForceHttps extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \C6Digital\LaravelForceHttps\LaravelForceHttps::class;
    }
}
