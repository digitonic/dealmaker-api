<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\Deal\GetDeal;
use Digitonic\DealmakerApi\Requests\Deal\ListDeals;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class Deal extends Resource
{
    /**
     * @param  int  $id  The deal id.
     */
    public function getDeal(int $id): Response
    {
        return $this->connector->send(new GetDeal($id));
    }

    /**
     * @param  int  $page  Page offset to fetch.
     * @param  int  $offset  Pad a number of results.
     */
    public function listDeals(?int $page, ?int $offset): Response
    {
        return $this->connector->send(new ListDeals($page, $offset));
    }
}
