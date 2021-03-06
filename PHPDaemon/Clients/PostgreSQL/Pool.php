<?php
namespace PHPDaemon\Clients\PostgreSQL;

use PHPDaemon\Network\Client;

class Pool extends Client {
	/**
	 * Setting default config options
	 * Overriden from AppInstance::getConfigDefaults
	 * @return array|bool
	 */
	protected function getConfigDefaults() {
		return [
			// default server
			'server'       => 'pg://root@127.0.0.1',
			// default port
			'port'         => 5432,
			// @todo add description
			'protologging' => 0,
			// disabled by default
			'enable'       => 0
		];
	}
}