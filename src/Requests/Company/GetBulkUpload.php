<?php

namespace Digitonic\DealmakerApi\Requests\Company;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getBulkUpload
 *
 * Return a given bulk upload by id
 */
class GetBulkUpload extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/companies/{$this->id}/documents/bulk_uploads/{$this->bulkUploadId}";
    }

    /**
     * @param  null|int  $page Page offset to fetch.
     * @param  null|int  $offset Pad a number of results.
     */
    public function __construct(
        protected int $id,
        protected int $bulkUploadId,
        protected ?int $page = null,
        protected ?int $offset = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page, 'offset' => $this->offset]);
    }
}
