<?php

namespace Digitonic\DealmakerApi\Requests\Misc;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getWebhooksSecurityToken
 *
 * Creates a new security token for webhook subscription
 */
class GetWebhooksSecurityToken extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/webhooks/security_token';
    }

    public function __construct()
    {
    }
}
