<?php

namespace Digitonic\DealmakerApi\Requests\Investor;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * bulkUploadInvestors
 *
 * Bulk upload investors
 */
class BulkUploadInvestors extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}/investors/bulk_upload";
    }

    /**
     * @param  int  $id The deal id.
     */
    public function __construct(
        protected int $id,
    ) {
    }
}
