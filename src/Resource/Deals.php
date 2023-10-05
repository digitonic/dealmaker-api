<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\Deals\PutDealsIdScriptTagEnvironment;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class Deals extends Resource
{
    /**
     * @param  int  $id The deal id.
     */
    public function putDealsIdScriptTagEnvironment(int $id): Response
    {
        return $this->connector->send(new PutDealsIdScriptTagEnvironment($id));
    }
}
