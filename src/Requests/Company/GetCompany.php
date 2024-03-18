<?php

namespace Digitonic\DealmakerApi\Requests\Company;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCompany
 *
 * Get a Company.
 */
class GetCompany extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/companies/{$this->id}";
    }

    public function __construct(
        protected int $id,
    ) {
    }
}
