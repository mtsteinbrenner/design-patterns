<?php

namespace console\models\designpatterns\creationalpatterns\factory;

class Smartphone extends AbstractProduct
{
	protected $os;
	protected $memory;
	protected $simSlots;

	public function getType(): string
	{
		return 'smartphone';
	}

	public function setOperatingSystem(string $os)
	{
		$this->os = $os;
	}

	public function getOperatingSystem(): string
	{
		return $this->os;
	}

	public function setMemory(int $memory)
	{
		$this->memory = $memory;
	}

	public function getMemory(): int
	{
		return $this->memory;
	}

	public function setSimSlots(int $simSlots)
	{
		$this->simSlots = $simSlots;
	}

	public function getSimSlots(): int
	{
		return $this->simSlots;
	}

	public function getDescription(): string
	{
		return "$this->manufacturer $this->name in $this->colour with $this->memory GB, $this->os operating system and $this->simSlots sim slots";
	}
}
