<?php

namespace console\models\designpatterns\creationalpatterns\objectpool;

use Exception;

class Client
{
	private $name;
	private $connectionPool;
	private $connection = null;

	public function __construct(string $name, ConnectionPool $connectionPool)
	{
		$this->name = $name;
		$this->connectionPool = $connectionPool;
	}

	public function startConnection(): ?Connection
	{
		try {
			$this->connection = $this->connectionPool->assignConnection();
		} catch (Exception $e) {
			echo 'Client ' . $this->name . ': ' . $e->getMessage() . PHP_EOL;

			return null;
		}

		echo 'Client ' . $this->name . ': Connection ' . $this->connection->getIndex() . ' assigned.' . PHP_EOL;

		return $this->connection;
	}

	public function showResults()
	{
		echo 'Client ' . $this->name . ': ' . $this->getConnection()->getResults();
	}

	public function getConnection(): ?Connection
	{
		return $this->connection;
	}

	public function closeConnection(): self
	{
		echo 'Client ' . $this->name . ': Connection ' . $this->connection->getIndex() . ' released.' . PHP_EOL;

		$this->connectionPool->releaseConnection($this->connection);
		$this->connection = null;

		return $this;
	}
}
