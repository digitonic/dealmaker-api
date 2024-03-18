<?php

namespace Digitonic\DealmakerApi;

use Digitonic\DealmakerApi\Resource\Company;
use Digitonic\DealmakerApi\Resource\Country;
use Digitonic\DealmakerApi\Resource\Deal;
use Digitonic\DealmakerApi\Resource\Investor;
use Digitonic\DealmakerApi\Resource\InvestorProfile;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;

class DealMakerApi extends Connector
{
    public function __construct(
        public readonly string $token
    ) {
    }

    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->token);
    }

    public function resolveBaseUrl(): string
    {
        return 'https://api.dealmaker.tech';
    }

    public function company(): Company
    {
        return new Company($this);
    }

    public function country(): Country
    {
        return new Country($this);
    }

    public function deal(): Deal
    {
        return new Deal($this);
    }

    public function investor(): Investor
    {
        return new Investor($this);
    }

    public function investorProfile(): InvestorProfile
    {
        return new InvestorProfile($this);
    }
}
