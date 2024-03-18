<?php

namespace Digitonic\DealmakerApi\Requests\InvestorProfile;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getDealInvestorProfiles
 *
 * Get investor profiles for a specific deal
 */
class GetDealInvestorProfiles extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/investor_profiles/{$this->dealId}";
    }

    /**
     * @param  int  $dealId  The deal id.
     * @param  null|int  $page  Page offset to fetch.
     * @param  null|int  $offset  Pad a number of results.
     * @param  null|int  $userId  The user id filter.
     */
    public function __construct(
        protected int $dealId,
        protected ?int $page = null,
        protected ?int $offset = null,
        protected ?int $userId = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page, 'offset' => $this->offset, 'user_id' => $this->userId]);
    }
}
