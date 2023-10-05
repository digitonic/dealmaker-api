<?php

namespace Digitonic\DealmakerApi\Requests\Company;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createBulkUpload
 *
 * Create bulk upload record
 */
class CreateBulkUpload extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/companies/{$this->id}/documents/bulk_uploads";
    }

    /**
     * @param  int  $id The company id
     */
    public function __construct(
        protected int $id,
    ) {
    }
}
