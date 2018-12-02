<?php

namespace console\models\designpatterns\structuralpatterns\decorator;

interface FilterInterface
{
	public function filter(): void;
	public function showResults(): array;
	public function updateResults(array $results): void;
}
