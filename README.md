# Snapshot Testing for Pest

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/pest-plugin-snapshots.svg?style=flat-square)](https://packagist.org/packages/spatie/pest-plugin-snapshots)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/pest-plugin-snapshots/run-tests?label=tests)](https://github.com/spatie/pest-plugin-snapshots/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/pest-plugin-snapshots.svg?style=flat-square)](https://packagist.org/packages/spatie/pest-plugin-snapshots)

This package adds snapshot testing capabilities to **[Pest](https://pestphp.com)**. It wraps
our [phpunit-snapshot-assertions](https://github.com/spatie/phpunit-snapshot-assertions) package making
snapshot assertions available in Pest tests.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/pest-plugin-snapshots.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/pest-plugin-snapshots)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require spatie/pest-plugin-snapshots --dev
```

## Usage

```php
use function Spatie\Snapshots\{assertMatchesSnapshot, assertMatchesJsonSnapshot};

it('can be cast to string', function () {
    $order = new Order(1);

    assertMatchesSnapshot($order->toString());
});

it('can be cast to json', function () {
    $order = new Order(1);

    assertMatchesJsonSnapshot($order->toJson());
});
```

You can also use an exception

```php
it('can be cast to string', function () {
    $order = new Order(1);

    expect($order->toString())->toMatchSnapshot();
});
```

For the full list of assertions, please refer to underlying package: [phpunit-snapshot-assertions](https://github.com/spatie/phpunit-snapshot-assertions).

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Nuno Maduro](https://github.com/nunomaduro)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
