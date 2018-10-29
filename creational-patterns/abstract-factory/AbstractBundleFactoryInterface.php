<?php

namespace console\models\designpatterns\creationalpatterns\abstractfactory;

interface AbstractBundleFactoryInterface
{
	public function createTariff(): AbstractTariff;
	public function createDevice(): AbstractDevice;
}
