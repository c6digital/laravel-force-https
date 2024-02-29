# Easily force HTTPS for all routes and URLs. 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/c6digital/laravel-force-https.svg?style=flat-square)](https://packagist.org/packages/c6digital/laravel-force-https)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/c6digital/laravel-force-https/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/c6digital/laravel-force-https/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/c6digital/laravel-force-https/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/c6digital/laravel-force-https/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/c6digital/laravel-force-https.svg?style=flat-square)](https://packagist.org/packages/c6digital/laravel-force-https)

This package registers a small piece of middleware that will force HTTPS access for all routes, as well as force HTTPS for generate URLs, e.g. `route()` and `url()` calls.

## Installation

You can install the package via Composer:

```bash
composer require c6digital/laravel-force-https
```

## Usage

The `ForceHttps` middleware is automatically registered with your application. All you need to do is use the `FORCE_HTTPS` environment variable to toggle the behaviour.

```sh
FORCE_HTTPS=true
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

- [Ryan Chandler](https://github.com/c6digital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
