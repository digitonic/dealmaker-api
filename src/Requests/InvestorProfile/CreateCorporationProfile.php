<?php

namespace Digitonic\DealmakerApi\Requests\InvestorProfile;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCorporationProfile
 *
 * Create new corporation investor profile associated to the user by email.
 */
class CreateCorporationProfile extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/investor_profiles/corporations';
    }

    public function __construct()
    {
    }
}
