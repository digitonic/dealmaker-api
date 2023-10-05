<?php

namespace Digitonic\DealmakerApi\Requests\Company;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getDividends
 *
 * Return dividends associated with a shareholder
 */
class GetDividends extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/companies/{$this->companyId}/portal/dividends";
    }

    public function __construct(
        protected int $companyId,
    ) {
    }
}
