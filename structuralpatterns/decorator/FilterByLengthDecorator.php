<?php

namespace console\models\designpatterns\structuralpatterns\decorator;

class FilterByLengthDecorator extends AbstractFilterDecorator
{
	public function filter(): void
	{
		$results = $this->filter->getResults();

		foreach ($results as $key => $result) {
			if ($result[0] === $this->term) {
				unset($results[$key]);
			}
		}

		$this->updateResults($results);

		$this->filter->filter();
	}
}
