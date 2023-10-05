<?php

namespace Digitonic\DealmakerApi\Requests\Investor;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteInvestorProfile
 *
 * Deletes the investor profile.
 */
class DeleteInvestorProfile extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/investor_profiles/{$this->type}/{$this->id}";
    }

    public function __construct(
        protected int $type,
        protected int $id,
    ) {
    }
}
