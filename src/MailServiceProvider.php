<?php

namespace Dena\LaravelElasticEmail;

use Illuminate\Mail\MailServiceProvider as OriginalServiceProvider;

class MailServiceProvider extends OriginalServiceProvider
{
	/**
	 * Register the Swift Transport instance.
	 *
	 * @return void
	 */
	protected function registerSwiftTransport()
	{
		$this->app->singleton('swift.transport', function ($app) {
			return new TransportManager($app);
		});
	}
}