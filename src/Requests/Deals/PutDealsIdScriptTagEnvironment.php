<?php

namespace Digitonic\DealmakerApi\Requests\Deals;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * putDealsIdScriptTagEnvironment
 *
 * Update script tag environment for the deal.
 */
class PutDealsIdScriptTagEnvironment extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}/script_tag_environment";
    }

    /**
     * @param  int  $id The deal id.
     */
    public function __construct(
        protected int $id,
    ) {
    }
}
