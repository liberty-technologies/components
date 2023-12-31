# Shared components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/liberty-technogologies/components.svg?style=flat-square)](https://packagist.org/packages/liberty-technogologies/components)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/liberty-technogologies/components/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/liberty-technogologies/components/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/liberty-technogologies/components/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/liberty-technogologies/components/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/liberty-technogologies/components.svg?style=flat-square)](https://packagist.org/packages/liberty-technogologies/components)

Shared Laravel View Components for Liberty Technologies

## Requirements

You must have installed Tailwind 3.0

## Installation

You can install the package via composer:

```bash
composer require liberty-technogologies/components
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="components-views"
```

## Usage

```php
$components = new LibertyTechnologies\Components();
echo $components->echoPhrase('Hello, Liberty Technologies!');
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

- [Nessim Abadi](https://github.com/nessimabadi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
