<?php

namespace console\models\designpatterns\creationalpatterns\builder;

class Phone
{
	protected $prefix;
	protected $number;

	public function __construct(string $prefix, string $number)
	{
		$this->prefix = $prefix;
		$this->number = $number;
	}

	public function setPrefix(string $prefix)
	{
		$this->prefix = $prefix;
	}

	public function setNumber(string $number)
	{
		$this->number = $number;
	}

	public function __toString(): string
	{
		return $this->prefix . $this->number;
	}
}
