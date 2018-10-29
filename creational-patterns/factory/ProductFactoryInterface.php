<?php

namespace console\models\designpatterns\creationalpatterns\factory;

Interface ProductFactoryInterface
{
	public function createProduct(string $type, string $manufacturer, string $name, float $price, array $configuration): AbstractProduct;
}
