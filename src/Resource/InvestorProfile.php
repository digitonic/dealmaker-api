<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\InvestorProfile\GetDealInvestorProfiles;
use Digitonic\DealmakerApi\Requests\InvestorProfile\GetInvestorProfile;
use Digitonic\DealmakerApi\Requests\InvestorProfile\GetInvestorProfiles;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class InvestorProfile extends Resource
{
    /**
     * @param  int  $id  The id of the investor profile.
     */
    public function getInvestorProfile(int $id): Response
    {
        return $this->connector->send(new GetInvestorProfile($id));
    }

    /**
     * @param  int  $page  Page offset to fetch.
     * @param  int  $offset  Pad a number of results.
     */
    public function getInvestorProfiles(?int $page, ?int $offset): Response
    {
        return $this->connector->send(new GetInvestorProfiles($page, $offset));
    }

    /**
     * @param  int  $dealId  The deal id.
     * @param  int  $page  Page offset to fetch.
     * @param  int  $offset  Pad a number of results.
     * @param  int  $userId  The user id filter.
     */
    public function getDealInvestorProfiles(int $dealId, ?int $page, ?int $offset, ?int $userId): Response
    {
        return $this->connector->send(new GetDealInvestorProfiles($dealId, $page, $offset, $userId));
    }
}
