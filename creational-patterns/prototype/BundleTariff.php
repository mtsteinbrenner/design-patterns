<?php

namespace console\models\designpatterns\creationalpatterns\prototype;

class BundleTariff extends AbstractTariff
{
	public function getFeatureString(): string
	{
		return ' with ' . $this->getFeatures()->getDataLimit() . 'GB data limit';
	}
}
