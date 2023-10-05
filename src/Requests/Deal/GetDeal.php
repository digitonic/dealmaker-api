<?php

namespace Digitonic\DealmakerApi\Requests\Deal;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getDeal
 *
 * Gets a single deal using the Deal ID
 */
class GetDeal extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}";
    }

    /**
     * @param  int  $id The deal id.
     */
    public function __construct(
        protected int $id,
    ) {
    }
}
