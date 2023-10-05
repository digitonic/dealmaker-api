<?php

namespace Digitonic\DealmakerApi\Requests\Shareholder;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShareholdersTags
 *
 * Gets a list of company shareholders grouped by tags.
 */
class GetShareholdersTags extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/companies/{$this->id}/shareholders/tags";
    }

    /**
     * @param  int  $id The company id.
     */
    public function __construct(
        protected int $id,
    ) {
    }
}
