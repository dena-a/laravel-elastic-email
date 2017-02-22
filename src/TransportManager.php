<?php

namespace Dena\LaravelElasticEmail;

use Illuminate\Mail\TransportManager as OriginalTransportManager;

class TransportManager extends OriginalTransportManager
{
	protected function createElasticEmailDriver()
	{
		$config = $this->app['config']->get('services.elasticemail', []);
		
		return new ElasticTransport(
			$this->getHttpClient($config),
			$config['api_key'],
			$config['public_account_id']
		);
	}
}