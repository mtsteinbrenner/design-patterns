<?php

namespace console\models\designpatterns\structuralpatterns\decorator;

class SortFilterDecorator extends AbstractFilterDecorator
{
	public function filter(): void
	{
		$this->filter->filter();
	}

	public function showResults(): array
	{
		return $this->filter->showResults();
	}

	public function sort(): void
	{
		$results = $this->showResults();

		sort($results);

		$this->filter->updateResults($results);
	}
}
