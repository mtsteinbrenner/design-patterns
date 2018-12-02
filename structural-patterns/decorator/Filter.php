<?php

namespace console\models\designpatterns\structuralpatterns\decorator;

class Filter implements FilterInterface
{
	protected $result;

	public function __construct($fullList)
	{
		$this->result = $fullList;
	}

	public function filter(): void
	{
		// filter without a filter doesn't do much
	}

	public function showResults(): array
	{
		return $this->result;
	}

	public function updateResults(array $result): void
	{
		$this->result = $result;
	}
}
