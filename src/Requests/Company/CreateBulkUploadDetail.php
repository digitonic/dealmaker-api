<?php

namespace Digitonic\DealmakerApi\Requests\Company;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createBulkUploadDetail
 *
 * Create a BulkUploadDetail class record
 */
class CreateBulkUploadDetail extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/companies/{$this->companyId}/documents/bulk_uploads/{$this->bulkUploadId}/details";
    }

    /**
     * @param  string  $bulkUploadId The Bulk upload ID from which detail is associated with
     */
    public function __construct(
        protected string $bulkUploadId,
        protected int $companyId,
    ) {
    }
}
