<?php

namespace console\models\designpatterns\creationalpatterns\factory;

abstract class AbstractProduct
{
	protected $manufacturer;
	protected $name;
	protected $price;
	protected $colour;

	public function __construct(string $manufacturer, string $name, float $price)
	{
		$this->manufacturer = $manufacturer;
		$this->name = $name;
		$this->price = $price;
	}

	public function getTitle(): string
	{
		return printf('%s %s for %s €', $this->manufacturer, $this->name, $this->price);
	}

	public function setColour(string $colour)
	{
		$this->colour = $colour;
	}

	public function getColour(): string
	{
		return $this->colour;
	}

	public function getPrice(): float
	{
		return $this->price;
	}

	abstract public function getType(): string;
	abstract public function getDescription(): string;
}
