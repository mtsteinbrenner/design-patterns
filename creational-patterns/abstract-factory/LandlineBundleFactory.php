<?php

namespace console\models\designpatterns\creationalpatterns\abstractfactory;

class LandlineBundleFactory implements AbstractBundleFactoryInterface
{
	public function createTariff(): AbstractTariff
	{
		return new LandlineTariff();
	}

	public function createDevice(): AbstractDevice
	{
		return new Router();
	}
}
