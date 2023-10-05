<?php

namespace Digitonic\DealmakerApi\Requests\InvestorProfile;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patchIndividualProfile
 *
 * Patch individual investor profile.
 */
class PatchIndividualProfile extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/investor_profiles/individuals/{$this->investorProfileId}";
    }

    public function __construct(
        protected int $investorProfileId,
    ) {
    }
}
