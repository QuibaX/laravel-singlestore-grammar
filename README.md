# SingleStore compatible grammar for Eloquent

## Installation

To add the package, add the repository under the repositories in your composer.json file.
```json
"repositories": {
    "quibax/laravel-singlestore-grammar": {
        "type": "vcs",
        "url": "https://github.com/quibax/laravel-singlestore-grammar"
    },
},
```
Next, add the package under 'require'.
```json
"require": {
    "quibax/laravel-singlestore-grammar": "dev-master",
}
```

## Usage

In the `register` method of your `AppServiceProvider`, add:
```php
Connection::resolverFor('mysql', function ($connection, $database, $prefix, $config) {
    return new SingleStoreConnection($connection, $database, $prefix, $config);
});
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [QuibaX](https://github.com/QuibaX)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
