<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\InvestorProfile\CreateCorporationProfile;
use Digitonic\DealmakerApi\Requests\InvestorProfile\CreateIndividualProfile;
use Digitonic\DealmakerApi\Requests\InvestorProfile\CreateJointProfile;
use Digitonic\DealmakerApi\Requests\InvestorProfile\CreateTrustProfile;
use Digitonic\DealmakerApi\Requests\InvestorProfile\GetDealInvestorProfiles;
use Digitonic\DealmakerApi\Requests\InvestorProfile\GetInvestorProfile;
use Digitonic\DealmakerApi\Requests\InvestorProfile\GetInvestorProfiles;
use Digitonic\DealmakerApi\Requests\InvestorProfile\PatchCorporationProfile;
use Digitonic\DealmakerApi\Requests\InvestorProfile\PatchIndividualProfile;
use Digitonic\DealmakerApi\Requests\InvestorProfile\PatchJointProfile;
use Digitonic\DealmakerApi\Requests\InvestorProfile\PatchTrustProfile;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class InvestorProfile extends Resource
{
    public function patchTrustProfile(int $investorProfileId): Response
    {
        return $this->connector->send(new PatchTrustProfile($investorProfileId));
    }

    public function createTrustProfile(): Response
    {
        return $this->connector->send(new CreateTrustProfile());
    }

    public function patchIndividualProfile(int $investorProfileId): Response
    {
        return $this->connector->send(new PatchIndividualProfile($investorProfileId));
    }

    public function createIndividualProfile(): Response
    {
        return $this->connector->send(new CreateIndividualProfile());
    }

    public function patchJointProfile(int $investorProfileId): Response
    {
        return $this->connector->send(new PatchJointProfile($investorProfileId));
    }

    public function createJointProfile(): Response
    {
        return $this->connector->send(new CreateJointProfile());
    }

    public function patchCorporationProfile(int $investorProfileId): Response
    {
        return $this->connector->send(new PatchCorporationProfile($investorProfileId));
    }

    public function createCorporationProfile(): Response
    {
        return $this->connector->send(new CreateCorporationProfile());
    }

    /**
     * @param  int  $id The id of the investor profile.
     */
    public function getInvestorProfile(int $id): Response
    {
        return $this->connector->send(new GetInvestorProfile($id));
    }

    /**
     * @param  int  $page Page offset to fetch.
     * @param  int  $offset Pad a number of results.
     */
    public function getInvestorProfiles(?int $page, ?int $offset): Response
    {
        return $this->connector->send(new GetInvestorProfiles($page, $offset));
    }

    /**
     * @param  int  $dealId The deal id.
     * @param  int  $page Page offset to fetch.
     * @param  int  $offset Pad a number of results.
     * @param  int  $userId The user id filter.
     */
    public function getDealInvestorProfiles(int $dealId, ?int $page, ?int $offset, ?int $userId): Response
    {
        return $this->connector->send(new GetDealInvestorProfiles($dealId, $page, $offset, $userId));
    }
}
