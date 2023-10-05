<?php

namespace Digitonic\DealmakerApi\Requests\Investor;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getEnforcements
 *
 * Get enforcements for a background search
 */
class GetEnforcements extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}/investors/{$this->investorId}/background_checks/{$this->searchEntityId}/enforcements";
    }

    public function __construct(
        protected int $id,
        protected int $investorId,
        protected int $searchEntityId,
    ) {
    }
}
