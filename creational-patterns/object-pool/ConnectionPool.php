<?php

namespace console\models\designpatterns\creationalpatterns\objectpool;

use Exception;

class ConnectionPool
{
	protected $connectionIndex = 1;
	protected $poolLimit;
	protected $connections = [];

	// limit of -1 is unlimited pool
	public function __construct(int $maxNumberOfConnections = -1)
	{
		$this->poolLimit = $maxNumberOfConnections;
	}

	public function assignConnection(): Connection
	{
		if (empty($this->connections)) {
			if ($this->connectionIndex <= $this->poolLimit || $this->poolLimit === -1) {
				$this->addNewConnection();
			} else {
				throw new Exception('Maximum number of available connections open, please try again later.');
			}
		}

		return array_pop($this->connections);
	}

	public function releaseConnection(Connection $connection): void
	{
		$connection->reset();
		$this->connections[] = $connection;
	}

	private function addNewConnection()
	{
		$this->connections[] = new Connection($this->connectionIndex);
		$this->connectionIndex++;
	}
}
