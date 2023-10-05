<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\Country\GetCountryStates;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class Country extends Resource
{
    public function getCountryStates(): Response
    {
        return $this->connector->send(new GetCountryStates());
    }
}
