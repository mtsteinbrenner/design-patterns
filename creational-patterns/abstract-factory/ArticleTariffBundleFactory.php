<?php

namespace console\models\designpatterns\creationalpatterns\abstractfactory;

class ArticleTariffBundleFactory implements AbstractBundleFactoryInterface
{
	public function createTariff(): AbstractTariff
	{
		return new BundleTariff();
	}

	public function createDevice(): AbstractDevice
	{
		return new Smartphone();
	}
}
