<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\Upload\GenerateUrl;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class Upload extends Resource
{
    public function generateUrl(): Response
    {
        return $this->connector->send(new GenerateUrl());
    }
}
