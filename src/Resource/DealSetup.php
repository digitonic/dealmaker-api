<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\DealSetup\CreateDealSetup;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class DealSetup extends Resource
{
    public function createDealSetup(): Response
    {
        return $this->connector->send(new CreateDealSetup());
    }
}
