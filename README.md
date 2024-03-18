# DealMaker API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/digitonic/dealmaker-api.svg?style=flat-square)](https://packagist.org/packages/digitonic/dealmaker-api)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/digitonic/dealmaker-api/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/digitonic/dealmaker-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/digitonic/dealmaker-api/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/digitonic/dealmaker-api/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/digitonic/dealmaker-api.svg?style=flat-square)](https://packagist.org/packages/digitonic/dealmaker-api)

**WARNING: This is not a complete package and is not ready for use. This is a work in progress and only contains a few read only endpoints**

A Laravel wrapper of the DealMaker API

## Installation

You can install the package via composer:

```bash
composer require digitonic/dealmaker-api
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="dealmaker-api-config"
```

This is the contents of the published config file:

```php
return [
    /**
     * The Client ID displayed when you created the OAuth application in the portal
     * This is typically called the "Public Key" in the portal
     */
    'client_id' => env('DEALMAKER_CLIENT_ID', ''),

    /**
     * The Client Secret displayed when you created the OAuth application in the portal
     * This is typically called the "Secret Key" in the portal
     */
    'client_secret' => env('DEALMAKER_CLIENT_SECRET', ''),

    /**
     * The scope is established when you created the OAuth application
     * This is typically called the "Scopes" in the portal
     */
    'scopes' => env('DEALMAKER_SCOPES', ''),
];
```

## Usage

```php
$dealmakerApi = new Digitonic\DealmakerApi();
$deals = new Digitonic\DealmakerApi\Requests\Deal\ListDeals();

$response = $dealmakerApi->send($deals);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Steven Richardson](https://github.com/richdynamix)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
