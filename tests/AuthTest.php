<?php

use Digitonic\DealmakerApi\DealMakerApiAuth;
use Digitonic\DealmakerApi\Requests\Auth\GetAccessToken;
use Illuminate\Support\Facades\Cache;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('can get the access token using the client credentials', function () {
    $mockClient = new MockClient([
        GetAccessToken::class => MockResponse::make(body: [
            'access_token' => 'test-token',
            'token_type' => 'Bearer',
            'expires_in' => 3600,
            'scope' => 'deals.read deals.investors.read companies.read',
            'created_at' => 1710759123,
        ], status: 200),
    ]);

    $connector = new DealMakerApiAuth();
    $connector->withMockClient($mockClient);

    $request = new GetAccessToken();
    $response = $connector->send($request);

    expect($response->status())->toBe(200);

    $data = $response->json();

    expect($data)->toHaveKeys(['access_token', 'token_type', 'expires_in']);

    expect($data['token_type'])->toBe('Bearer');

    expect($data['expires_in'])->toBe(3600);
});

it('uses a cached service wrapper for the access token', function () {
    $mockClient = new MockClient([
        GetAccessToken::class => MockResponse::make(body: [
            'access_token' => 'test-token',
            'token_type' => 'Bearer',
            'expires_in' => 3600,
            'scope' => 'deals.read deals.investors.read companies.read',
            'created_at' => 1710759123,
        ], status: 200),
    ]);

    $connector = new DealMakerApiAuth();
    $connector->withMockClient($mockClient);

    expect(Cache::get('dealmaker_api_token'))->toBeNull();

    $accessToken = $connector->getAccessToken();

    expect($accessToken)->toBe('test-token');
    expect(Cache::get('dealmaker_api_token'))->toBe('test-token');
});
