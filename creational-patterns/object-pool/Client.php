<?php

namespace console\models\designpatterns\creationalpatterns\objectpool;

use Exception;

class Client
{
	protected $id;
	protected $connectionPool;
	protected $connection = null;

	public function __construct(int $id, ConnectionPool $connectionPool)
	{
		$this->id = $id;
		$this->connectionPool = $connectionPool;
	}

	public function startConnection(): ?Connection
	{
		try {
			$this->connection = $this->connectionPool->assignConnection();
		} catch (Exception $e) {
			echo "Client $this->id: " . $e->getMessage() . PHP_EOL;

			return null;
		}

		echo "Client $this->id: Connection " . $this->connection->getId() .' opened.' . PHP_EOL;

		return $this->connection;
	}

	public function showResults()
	{
		echo "Client $this->id: " . ($this->getConnection() ? $this->getConnection()->getResults() : 'No connection!');
	}

	public function getConnection(): ?Connection
	{
		return $this->connection;
	}

	public function closeConnection(): self
	{
		echo "Client $this->id: Connection " . $this->connection->getId() . ' released.' . PHP_EOL;

		$this->connectionPool->releaseConnection($this->connection);
		$this->connection = null;

		return $this;
	}
}
