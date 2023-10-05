# DealMaker API PHP SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/digitonic/dealmaker-api.svg?style=flat-square)](https://packagist.org/packages/digitonic/dealmaker-api)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/digitonic/dealmaker-api/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/digitonic/dealmaker-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/digitonic/dealmaker-api/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/digitonic/dealmaker-api/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/digitonic/dealmaker-api.svg?style=flat-square)](https://packagist.org/packages/digitonic/dealmaker-api)

A PHP implementation of the DealMaker API

## Installation

You can install the package via composer:

```bash
composer require digitonic/dealmaker-api
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="dealmaker-api-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="dealmaker-api-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="dealmaker-api-views"
```

## Usage

```php
$dealmakerApi = new Digitonic\DealmakerApi();
echo $dealmakerApi->echoPhrase('Hello, Digitonic!');
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
