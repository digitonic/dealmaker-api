<?php

namespace Digitonic\DealmakerApi\Requests\InvestorProfile;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createTrustProfile
 *
 * Create new trust investor profile associated to the user by email.
 */
class CreateTrustProfile extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/investor_profiles/trusts';
    }

    public function __construct()
    {
    }
}
