<?php

namespace Digitonic\DealmakerApi\Requests\Deal;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listDeals
 *
 * List available deals
 */
class ListDeals extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/deals';
    }

    /**
     * @param  null|int  $page Page offset to fetch.
     * @param  null|int  $offset Pad a number of results.
     */
    public function __construct(
        protected ?int $page = null,
        protected ?int $offset = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page, 'offset' => $this->offset]);
    }
}
