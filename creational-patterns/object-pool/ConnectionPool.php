<?php

namespace console\models\designpatterns\creationalpatterns\objectpool;

use Exception;

class ConnectionPool
{
	private $connectionIndices = [];
	private $availableConnections = [];
	private $unavailableConnections = [];

	public function __construct(int $maxNumberOfConnections = 8)
	{
		for ($i = 0; $i < $maxNumberOfConnections; $i++) {
			$this->connectionIndices[$i] = $maxNumberOfConnections - $i;
		}
	}

	public function assignConnection(): Connection
	{
		if (empty($this->availableConnections)) {
			if (empty($this->connectionIndices)) {
				throw new Exception('Maximum number of available connections open, please try again later.');
			} else {
				$connection = new Connection(array_pop($this->connectionIndices));
			}
		} else {
			$connection = array_pop($this->availableConnections);
		}

		$this->unavailableConnections[$connection->getIndex()] = $connection;

		return $connection;
	}

	public function releaseConnection(Connection $connection): void
	{
		if (isset($this->unavailableConnections[$connection->getIndex()])) {
			$connection->reset();

			unset($this->unavailableConnections[$connection->getIndex()]);
			$this->availableConnections[$connection->getIndex()] = $connection;
		}
	}
}
