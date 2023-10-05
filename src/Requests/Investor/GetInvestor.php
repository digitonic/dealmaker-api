<?php

namespace Digitonic\DealmakerApi\Requests\Investor;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getInvestor
 *
 * Gets a single investor by the id.
 */
class GetInvestor extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}/investors/{$this->investorId}";
    }

    /**
     * @param  int  $id The deal id.
     * @param  int  $investorId The investor id.
     */
    public function __construct(
        protected int $id,
        protected int $investorId,
    ) {
    }
}
