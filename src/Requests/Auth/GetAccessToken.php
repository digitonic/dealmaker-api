<?php

namespace Digitonic\DealmakerApi\Requests\Auth;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasFormBody;

/**
 * getCompanies
 *
 * Get companies
 */
class GetAccessToken extends Request implements HasBody
{
    use HasFormBody;

    protected Method $method = Method::POST;

    protected mixed $clientId;

    protected mixed $clientSecret;

    protected mixed $scopes;

    public function resolveEndpoint(): string
    {
        return '/oauth/token';
    }

    public function __construct()
    {
        $config = config('dealmaker-api');

        $this->clientId = $config['client_id'];
        $this->clientSecret = $config['client_secret'];
        $this->scopes = $config['scopes'];
    }

    protected function defaultBody(): array
    {
        return [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'scope' => $this->scopes,
        ];
    }
}
