<?php

namespace console\models\designpatterns\creationalpatterns\prototype;

use Exception;

class TariffPrototypeManufacturer
{
	protected $templates = [];

	public function addTariffTemplate(string $key, AbstractTariff $tariff)
	{
		$this->templates[$key] = $tariff;
	}

	public function createTariffByTemplate(string $key, string $name): AbstractTariff
	{
		if (!isset($this->templates[$key])) {
			throw new Exception('no template exists');
		}

		/** @var AbstractTariff $newTariff */
		$newTariff = clone $this->templates[$key];
		$newTariff->setName($name);

		return $newTariff;
	}
}
