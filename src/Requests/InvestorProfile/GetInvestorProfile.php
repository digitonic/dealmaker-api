<?php

namespace Digitonic\DealmakerApi\Requests\InvestorProfile;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getInvestorProfile
 *
 * Get an investor profile
 */
class GetInvestorProfile extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/investor_profiles/profile/{$this->id}";
    }

    /**
     * @param  int  $id The id of the investor profile.
     */
    public function __construct(
        protected int $id,
    ) {
    }
}
