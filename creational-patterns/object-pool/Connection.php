<?php

namespace console\models\designpatterns\creationalpatterns\objectpool;

class Connection
{
	private $index;
	private $results = [];

	public function __construct(int $index)
	{
		$this->index = $index;
	}

	public function getIndex(): int
	{
		return $this->index;
	}

	public function doOperation(string $operation): self
	{
		// do complex actions and get results by api, db, etc
		$this->results[] = 'Result of Operation ' . $operation;

		return $this;
	}

	public function reset(): void
	{
		$this->results = [];
	}

	public function getResults(string $key = null): ?string
	{
		if ($key) {
			return isset($this->results[$key]) ? $this->results[$key] : null;
		}

		$resultList = null;

		foreach ($this->results as $result) {
			$resultList .= ($resultList ? ' ' : '| ') . $result . ' |';
		}

		return ($resultList ?? 'No results found') . PHP_EOL;
	}
}
