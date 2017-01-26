**open-cetacean/laravel-json-header** is a PHP package built for Laravel to
force Laravel API group to JSON header activating wantsJson()

## Installation

This project can be installed via [Composer](http://getcomposer.org).
Add the following line to the require block of your composer.json file:

    {
        "require": {
                "open-cetacean/laravel-json-header": "^1.0"
        }

    }

You'll then run `composer install` or `composer update`.

Or run the following command:

    composer require open-cetacean/laravel-json-header

## Middleware

To register the middleware add the following to the `$routeMiddleware` array within the `app/Http/Kernel.php` file:

```php
protected $routeMiddleware = [
    // ...
    'jsonHeader' => \OpenCetacean\JsonHeader\Middleware\AcceptJson::class,
    // ...
];
```

then add the middleware to your API routes:

```php
Route::group(['middleware' => ['api', 'acceptJson']], function () {
    // ...
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
