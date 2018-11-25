<?php

namespace console\models\designpatterns\structuralpatterns\decorator;

class SortFilterDecorator extends AbstractFilterDecorator
{
	public function filter(): void
	{
		$this->filter->filter();
	}

	public function getResults(): array
	{
		return $this->filter->getResults();
	}

	public function sort(): void
	{
		sort($this->getResults());
		$this->filter->updateResults($this->getResults());
	}
}
