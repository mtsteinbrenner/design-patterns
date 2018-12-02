<?php

namespace console\models\designpatterns\structuralpatterns\decorator;

abstract class AbstractFilterDecorator implements FilterInterface
{
	protected $filter;
	protected $term;

	public function __construct(FilterInterface $filter, $term = null)
	{
		$this->filter = $filter;
		$this->term = $term;
	}

	abstract public function filter(): void;

	public function showResults(): array
	{
		return $this->filter->showResults();
	}

	public function updateResults(array $results): void
	{
		$this->filter->updateResults($results);
	}

	public function hasMethod(string $method): bool
	{
		if (method_exists($this, $method)) {
			return true;
		}

		if ($this->filter instanceof AbstractFilterDecorator) {
			return $this->filter->hasMethod($method);
		}

		return false;
	}

	public function __call($method, $args)
	{
		return call_user_func_array(
			array($this->filter, $method),
			$args
		);
	}
}
