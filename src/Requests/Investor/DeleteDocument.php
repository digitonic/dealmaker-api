<?php

namespace Digitonic\DealmakerApi\Requests\Investor;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteDocument
 *
 * Delete document for deal investor
 */
class DeleteDocument extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}/investors/{$this->investorId}/delete_document/{$this->documentId}";
    }

    public function __construct(
        protected int $id,
        protected int $investorId,
        protected int $documentId,
    ) {
    }
}
