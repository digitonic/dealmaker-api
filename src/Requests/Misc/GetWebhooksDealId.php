<?php

namespace Digitonic\DealmakerApi\Requests\Misc;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getWebhooksDealId
 *
 * Returns a deal
 */
class GetWebhooksDealId extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/webhooks/deal/{$this->id}";
    }

    public function __construct(
        protected int $id,
    ) {
    }
}
