<?php

namespace console\models\designpatterns\creationalpatterns\factory;

class Router extends AbstractProduct
{
	protected $bandwidth;

	public function getType(): string
	{
		return 'router';
	}

	public function setBandwidth(int $bandwidth)
	{
		$this->bandwidth = $bandwidth;
	}

	public function getBandwidth(): int
	{
		return $this->bandwidth;
	}

	public function getDescription(): string
	{
		return "$this->manufacturer $this->name in $this->colour with $this->bandwidth GB bandwidth";
	}
}
