<?php

namespace Dena\LaravelElasticEmail;

use Illuminate\Mail\TransportManager as OriginalTransportManager;

class TransportManager extends OriginalTransportManager
{
	protected function createElasticEmailDriver()
	{
		$config = $this->app['config']->get('services.elastic_email', []);
		return new ElasticTransport(
			$this->guzzle($config),
			$config['key'],
			$config['account']
		);
	}
}