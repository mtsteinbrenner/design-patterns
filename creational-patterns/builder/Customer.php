<?php

namespace console\models\designpatterns\creationalpatterns\builder;

class Customer
{
	protected $salutation;
	protected $prename;
	protected $surname;
	protected $email;
	protected $password;
	protected $phone;
	protected $addresses = [];

	public function __construct(string $salutation, string $prename, string $surname)
	{
		$this->salutation = $salutation;
		$this->prename = $prename;
		$this->surname = $surname;
	}

	public function setEmail(string $email)
	{
		$this->email = $email;
	}

	public function setPassword(string $password)
	{
		$this->password = hash('sha256', $password);
	}

	public function comparePassword(string $input): bool
	{
		return hash('sha256', $input) === $this->password;
	}

	public function setPhone(Phone $phone)
	{
		$this->phone = $phone;
	}

	public function getPhone(): Phone
	{
		return $this->phone;
	}

	public function setBillingAddress(Address $address)
	{
		$this->addresses['billing'] = $address;
	}

	public function setDeliveryAddress(Address $address)
	{
		$this->addresses['delivery'] = $address;
	}

	public function getBillingAddress(): Address
	{
		return $this->addresses['billing'];
	}

	public function getDeliveryAddress(): Address
	{
		return $this->addresses['delivery'] ?? $this->addresses['billing'];
	}

	public function __toString(): string
	{
		return "$this->salutation $this->prename $this->surname" . PHP_EOL .
			'Billing: ' . (string)$this->getBillingAddress() . PHP_EOL .
			'Delivery: ' . (string)$this->getDeliveryAddress() . PHP_EOL .
			"Contact: $this->email, " . (string)$this->getPhone() . PHP_EOL;
	}
}
