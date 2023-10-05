<?php

namespace Digitonic\DealmakerApi\Requests\Shareholder;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShareholders
 *
 * Gets a list of company shareholders.
 */
class GetShareholders extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/companies/{$this->id}/shareholders";
    }

    /**
     * @param  int  $id The company id.
     */
    public function __construct(
        protected int $id,
    ) {
    }
}
