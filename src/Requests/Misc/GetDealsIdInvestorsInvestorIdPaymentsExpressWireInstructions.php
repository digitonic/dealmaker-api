<?php

namespace Digitonic\DealmakerApi\Requests\Misc;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getDealsIdInvestorsInvestorIdPaymentsExpressWireInstructions
 *
 * Get express wire instructions
 */
class GetDealsIdInvestorsInvestorIdPaymentsExpressWireInstructions extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}/investors/{$this->investorId}/payments/express_wire/instructions";
    }

    public function __construct(
        protected int $id,
        protected int $investorId,
    ) {
    }
}
