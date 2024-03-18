<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\Company\GetCompanies;
use Digitonic\DealmakerApi\Requests\Company\GetCompany;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class Company extends Resource
{
    /**
     * @param  int  $page  Page offset to fetch.
     * @param  int  $offset  Pad a number of results.
     */
    public function getCompanies(?int $page, ?int $offset): Response
    {
        return $this->connector->send(new GetCompanies($page, $offset));
    }

    public function getCompany(int $id): Response
    {
        return $this->connector->send(new GetCompany($id));
    }
}
