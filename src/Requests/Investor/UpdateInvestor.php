<?php

namespace Digitonic\DealmakerApi\Requests\Investor;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateInvestor
 *
 * Create a single deal investor
 */
class CreateInvestor extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}/investors";
    }

    /**
     * @param  int  $id  The deal id.
     * @param  array  $payload  The post body payload.
     */
    public function __construct(
        protected int $id,
        protected array $payload
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->payload;
    }
}
