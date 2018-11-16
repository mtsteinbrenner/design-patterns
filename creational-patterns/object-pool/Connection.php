<?php

namespace console\models\designpatterns\creationalpatterns\objectpool;

class Connection
{
	protected $id;
	protected $results = [];

	public function __construct(int $id)
	{
		$this->id = $id;
	}

	public function getId(): int
	{
		return $this->id;
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

	public function getResults(): ?string
	{
		$resultList = null;

		foreach ($this->results as $result) {
			$resultList .= ($resultList ? ' ' : '| ') . $result . ' |';
		}

		return ($resultList ?? 'No results found') . PHP_EOL;
	}
}
