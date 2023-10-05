<?php

namespace Digitonic\DealmakerApi\Requests\Company;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getDetailsErrorsGrouped
 *
 * Return bulk upload details grouped by status
 */
class GetDetailsErrorsGrouped extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/companies/{$this->companyId}/documents/bulk_uploads/{$this->bulkUploadId}/details/grouped_errors";
    }

    public function __construct(
        protected int $companyId,
        protected int $bulkUploadId,
    ) {
    }
}
