<?php

namespace Digitonic\DealmakerApi\Requests\DealSetup;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createDealSetup
 *
 * Create deal setup
 */
class CreateDealSetup extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/deal_setups';
    }

    public function __construct()
    {
    }
}
