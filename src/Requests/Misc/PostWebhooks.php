<?php

namespace Digitonic\DealmakerApi\Requests\Misc;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * postWebhooks
 *
 * Creates new webhook subscription
 */
class PostWebhooks extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/webhooks';
    }

    public function __construct()
    {
    }
}
