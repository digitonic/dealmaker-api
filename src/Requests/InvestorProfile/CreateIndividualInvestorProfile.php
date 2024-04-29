<?php

namespace Digitonic\DealmakerApi\Requests\InvestorProfile;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateIndividualInvestorProfile
 *
 * Create new individual investor profile
 */
class CreateIndividualInvestorProfile extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/investor_profiles/individuals";
    }

    /**
     * @param  array  $payload  The post body payload.
     */
    public function __construct(
        protected array $payload
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->payload;
    }
}
