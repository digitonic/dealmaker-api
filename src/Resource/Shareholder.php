<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\Shareholder\GetShareholders;
use Digitonic\DealmakerApi\Requests\Shareholder\GetShareholdersTags;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class Shareholder extends Resource
{
    /**
     * @param  int  $id The company id.
     */
    public function getShareholdersTags(int $id): Response
    {
        return $this->connector->send(new GetShareholdersTags($id));
    }

    /**
     * @param  int  $id The company id.
     */
    public function getShareholders(int $id): Response
    {
        return $this->connector->send(new GetShareholders($id));
    }
}
