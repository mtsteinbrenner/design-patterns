<?php

namespace console\models\designpatterns\structuralpatterns\decorator;

class FilterByLengthDecorator extends AbstractFilterDecorator
{
	public function filter(): void
	{
		$results = $this->filter->showResults();

		foreach ($results as $key => $result) {
			if (strlen($result) !== $this->term) {
				unset($results[$key]);
			}
		}

		$this->updateResults($results);

		$this->filter->filter();
	}
}
