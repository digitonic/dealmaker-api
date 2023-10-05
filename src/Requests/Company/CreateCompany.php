<?php

namespace Digitonic\DealmakerApi\Requests\Company;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCompany
 *
 * Creates a new company.
 */
class CreateCompany extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/companies';
    }

    public function __construct()
    {
    }
}
