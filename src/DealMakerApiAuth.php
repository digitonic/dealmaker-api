<?php

namespace Digitonic\DealmakerApi;

use Digitonic\DealmakerApi\Requests\Auth\GetAccessToken;
use Illuminate\Support\Facades\Cache;
use Saloon\Http\Connector;

class DealMakerApiAuth extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'https://app.dealmaker.tech';
    }

    public function getAccessToken()
    {
        return Cache::remember('dealmaker_api_token', 3600, function () {
            return $this->send(new GetAccessToken())->json()['access_token'];
        });
    }
}
