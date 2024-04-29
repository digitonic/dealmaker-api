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
class PatchInvestor extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}/investors/{$this->investorId}";
    }

    /**
     * @param  int  $id  The deal id.
     * @param  int  $investorId  The investor id.
     * @param  array  $payload  The post body payload.
     */
    public function __construct(
        protected int $id,
        protected int $investorId,
        protected array $payload
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->payload;
    }
}
