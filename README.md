# Laravel Elastic Email
A simple plugin to allow sending emails through Elastic E-Mail

## Installation

You can add Laravel Elastic Email as a dependency using the composer CLI:

```bash
composer require dena-a/laravel-elastic-email
```

Next add the following to your config/services.php
```php
'elasticemail' => [
	'api_key' => env('ELASTIC_API_KEY'),
	'public_account_id' => env('ELASTIC_ACCOUNT_ID')
]
```
and add the correct values to your .env file.

Third disable the laravel default MailServiceProvider in config/app.php and add the new ServiceProvider
```php
'providers' => [
    ...
    Dena\LaravelElasticEmail\MailServiceProvider::class,
],
```

Finally switch your default mail provider to elastic email in your .env file by setting MAIL_DRIVER=elasticemail

### Usage ###

This package was constructed to work exactly the same as the normal laravel mailers and thus usage is the same.
For more information regarding sending email through laravel see the [Laravel Documentation](https://laravel.com/docs/master/mail)

This should work in Laravel 5.1 and up.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.