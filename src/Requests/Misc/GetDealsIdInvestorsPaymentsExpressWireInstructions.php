<?php

namespace Digitonic\DealmakerApi\Requests\Misc;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getDealsIdInvestorsPaymentsExpressWireInstructions
 *
 * Get list of express wire instructions
 */
class GetDealsIdInvestorsPaymentsExpressWireInstructions extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}/investors/payments/express_wire/instructions";
    }

    public function __construct(
        protected int $id,
    ) {
    }
}
