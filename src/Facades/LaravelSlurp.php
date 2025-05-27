<?php

namespace Snapey\LaravelSlurp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Snapey\LaravelSlurp\LaravelSlurp
 */
class LaravelSlurp extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Snapey\LaravelSlurp\LaravelSlurp::class;
    }
}
