<?php

namespace Digitonic\DealmakerApi\Requests\Investor;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listInvestors
 *
 * List deal investors according to the specified search criteria.
 */
class ListInvestors extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}/investors";
    }

    /**
     * @param  int  $id The deal id.
     * @param  null|int  $page Page offset to fetch.
     * @param  null|int  $offset Pad a number of results.
     * @param  null|array  $investorIds An array of investor ids.
     * @param  null|string  $q The search query for investors. For additional information on filtering and seach, click [here](#section/Search-and-Filtering-(The-q-parameter)/Keyword-filtering)
     */
    public function __construct(
        protected int $id,
        protected ?int $page = null,
        protected ?int $offset = null,
        protected ?array $investorIds = null,
        protected ?string $q = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page, 'offset' => $this->offset, 'investor_ids' => $this->investorIds, 'q' => $this->q]);
    }
}
