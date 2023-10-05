<?php

namespace Digitonic\DealmakerApi\Requests\InvestorProfile;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patchCorporationProfile
 *
 * Patch corporation investor profile
 */
class PatchCorporationProfile extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/investor_profiles/corporations/{$this->investorProfileId}";
    }

    public function __construct(
        protected int $investorProfileId,
    ) {
    }
}
