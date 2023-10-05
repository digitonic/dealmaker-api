<?php

namespace Digitonic\DealmakerApi\Requests\Upload;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * generateUrl
 *
 * Create a presigned URL for uploading file to Amazon S3 bucket
 */
class GenerateUrl extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/uploads/generate_url';
    }

    public function __construct()
    {
    }
}
