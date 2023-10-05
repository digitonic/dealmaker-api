<?php

namespace Digitonic\DealmakerApi\Requests\Misc;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * putWebhooksId
 *
 * Updates webhook subscription
 */
class PutWebhooksId extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/webhooks/{$this->id}";
    }

    public function __construct(
        protected int $id,
    ) {
    }
}
