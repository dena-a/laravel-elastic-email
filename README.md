# Laravel Elastic Email #

A simple plugin to allow sending emails through Elastic E-Mail

### Installation ###

You can add Laravel Elastic Email as a dependency using the composer CLI:

```bash
composer require comyoo/laravel-elastic-email
```

Next add the following to your config/services.php
```php
'elastic_email' => [
	'secret' => env('ELASTIC_SECRET'),
	'username' => env('ELASTIC_USERNAME')
]
```
and add the correct values to your .env file.

Third disable the laravel default MailServiceProvider in config/app.php and add the new ServiceProvider
```php
'providers' => [
    /*
     * Laravel Framework Service Providers...
     */
    ...
//    Illuminate\Mail\MailServiceProvider::class,
    Comyoo\LaravelElasticEmail\MailServiceProvider::class,
    ...
],
```

Finally switch your default mail provider to elastic email in your .env file by setting MAIL_DRIVER=elastic_email

### Usage ###

This package was constructed to work exactly the same as the normal laravel mailers and thus usage is the same.
For more information regarding sending email through laravel see the [Laravel Documentation](https://laravel.com/docs/master/mail)