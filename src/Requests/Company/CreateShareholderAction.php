<?php

namespace Digitonic\DealmakerApi\Requests\Company;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createShareholderAction
 *
 * Create a shareholder action
 */
class CreateShareholderAction extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/companies/{$this->companyId}/shareholders/{$this->shareholderId}/actions";
    }

    /**
     * @param  int  $companyId The company id
     * @param  int  $shareholderId The shareholder id
     */
    public function __construct(
        protected int $companyId,
        protected int $shareholderId,
    ) {
    }
}
