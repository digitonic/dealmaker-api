<?php

namespace Digitonic\DealmakerApi\Requests\Company;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getBulkUploadDetailsErrors
 *
 * Returns a full list of details with errors of the given bulk upload
 */
class GetBulkUploadDetailsErrors extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/companies/{$this->companyId}/documents/bulk_uploads/{$this->bulkUploadId}/details/errors";
    }

    public function __construct(
        protected int $companyId,
        protected int $bulkUploadId,
    ) {
    }
}
