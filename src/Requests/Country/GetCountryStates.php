<?php

namespace Digitonic\DealmakerApi\Requests\Country;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCountryStates
 *
 * Get countries and states
 */
class GetCountryStates extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/country/states';
    }

    public function __construct()
    {
    }
}
