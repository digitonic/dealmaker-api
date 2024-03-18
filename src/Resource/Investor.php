<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\Investor\GetInvestor;
use Digitonic\DealmakerApi\Requests\Investor\ListInvestors;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class Investor extends Resource
{
    /**
     * @param  int  $id  The deal id.
     * @param  int  $page  Page offset to fetch.
     * @param  int  $offset  Pad a number of results.
     * @param  array  $investorIds  An array of investor ids.
     * @param  string  $q  The search query for investors. For additional information on filtering and seach, click [here](#section/Search-and-Filtering-(The-q-parameter)/Keyword-filtering)
     */
    public function listInvestors(int $id, ?int $page, ?int $offset, ?array $investorIds, ?string $q): Response
    {
        return $this->connector->send(new ListInvestors($id, $page, $offset, $investorIds, $q));
    }

    /**
     * @param  int  $id  The deal id.
     * @param  int  $investorId  The investor id.
     */
    public function getInvestor(int $id, int $investorId): Response
    {
        return $this->connector->send(new GetInvestor($id, $investorId));
    }
}
