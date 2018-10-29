<?php

namespace console\models\designpatterns\creationalpatterns\builder;

class Address
{
	protected $street;
	protected $number;
	protected $zip;
	protected $city;
	protected $company;

	public function __construct(string $street, string $number, string $zip, string $city, ?string $company)
	{
		$this->street = $street;
		$this->number = $number;
		$this->zip = $zip;
		$this->city = $city;
		$this->company = $company;
	}

	public function setStreet(string $street, string $number)
	{
		$this->street = $street;
		$this->number = $number;
	}

	public function setCity(string $zip, string $city)
	{
		$this->zip = $zip;
		$this->city = $city;
	}

	public function setCompany(string $company)
	{
		$this->company = $company;
	}

	public function __toString(): string
	{
		return ($this->company ? $this->company . ', ' : '') . $this->street . ' ' . $this->number . ', ' . $this->zip . ' ' . $this->city;
	}
}
