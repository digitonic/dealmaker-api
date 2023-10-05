<?php

namespace Digitonic\DealmakerApi\Requests\Misc;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getWebhooksDealsSearch
 *
 * Searches for deals for a given user
 */
class GetWebhooksDealsSearch extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/webhooks/deals/search';
    }

    public function __construct()
    {
    }
}
