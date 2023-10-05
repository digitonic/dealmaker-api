<?php

namespace Digitonic\DealmakerApi\Requests\Investor;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createInvestor
 *
 * Create a single deal investor.
 */
class CreateInvestor extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}/investors";
    }

    /**
     * @param  int  $id The deal id.
     */
    public function __construct(
        protected int $id,
    ) {
    }
}
