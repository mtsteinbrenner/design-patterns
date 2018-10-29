<?php

namespace console\models\designpatterns\creationalpatterns\prototype;

abstract class AbstractTariff
{
	protected $provider;
	protected $net;
	protected $name;
	protected $fulfillmentPartner;
	protected $features;

	public function __construct(string $provider, string $name, string $net, string $fulfillmentPartner, TariffFeatures $features = null)
	{
		$this->provider = $provider;
		$this->name = $name;
		$this->net = $net;
		$this->fulfillmentPartner = $fulfillmentPartner;
		$this->features = $features ?? new TariffFeatures();
	}

	public function __clone()
	{
		$this->features = clone $this->features;
	}

	public function getFeatures(): TariffFeatures
	{
		return $this->features;
	}

	public function getDescription(): string
	{
		return "$this->provider $this->name brought to you by $this->fulfillmentPartner in the $this->net net";
	}

	public function setName(string $name)
	{
		$this->name = $name;
	}
}
