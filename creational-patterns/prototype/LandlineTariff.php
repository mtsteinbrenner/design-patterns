<?php

namespace console\models\designpatterns\creationalpatterns\prototype;

class LandlineTariff extends AbstractTariff
{
	public function getFeatureString(): string
	{
		$text = '';

		if ($this->getFeatures()->hasFlatrate()) {
			$text .= ' with flatrate ';
		}

		return $text;
	}
}
