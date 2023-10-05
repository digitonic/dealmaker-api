<?php

namespace Digitonic\DealmakerApi\Requests\Investor;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patchInvestor
 *
 * Patch deal investor
 */
class PatchInvestor extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

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
