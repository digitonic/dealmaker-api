<?php

namespace Digitonic\DealmakerApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Digitonic\DealmakerApi\DealmakerApi
 */
class DealmakerApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Digitonic\DealmakerApi\DealmakerApi::class;
    }
}
