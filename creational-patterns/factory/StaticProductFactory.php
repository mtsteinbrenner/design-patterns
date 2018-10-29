<?php

namespace console\models\designpatterns\creationalpatterns\factory;

use Exception;

class StaticProductFactory
{
	public static function createProduct(string $type, string $manufacturer, string $name, float $price, array $configuration): AbstractProduct
	{
		switch ($type) {
			case 'smartphone':
				return self::createSmartphone($manufacturer, $name, $price, $configuration);
			case 'router':
				return self::createRouter($manufacturer, $name, $price, $configuration);
			default:
				throw new Exception('unknown type');
		}
	}

	public static function createSmartphone(string $manufacturer, string $name, float $price, array $configuration): Smartphone
	{
		$smartphone = new Smartphone($manufacturer, $name, $price);
		$smartphone->setColour($configuration['colour']);
		$smartphone->setOperatingSystem($configuration['os']);
		$smartphone->setMemory($configuration['memory']);
		$smartphone->setSimSlots($configuration['simSlots']);

		return $smartphone;
	}

	public static function createRouter(string $manufacturer, string $name, float $price, array $configuration): Router
	{
		$router = new Router($manufacturer, $name, $price);
		$router->setColour($configuration['colour']);
		$router->setBandwidth($configuration['bandwidth']);

		return $router;
	}
}
