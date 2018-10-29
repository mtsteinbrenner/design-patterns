<?php

namespace console\models\designpatterns\creationalpatterns\builder;

class CustomerBuilder implements CustomerBuilderInterface
{
	/** @var Customer $customer */
	private $customer;

	public function createCustomer(string $salutation, string $prename, string $surname): self
	{
		$this->customer = new Customer($salutation, $prename, $surname);

		return $this;
	}

	public function addEmail(string $email): self
	{
		$this->customer->setEmail($email);

		return $this;
	}

	public function addPassword(string $password): self
	{
		$this->customer->setPassword($password);

		return $this;
	}

	public function addAddress(string $street, string $number, string $zip, string $city, ?string $company = null): self
	{
		$address = new Address($street, $number, $zip, $city, $company);
		$this->customer->setBillingAddress($address);

		return $this;
	}

	public function addDeliveryAddress(string $street, string $number, string $zip, string $city, ?string $company = null): self
	{
		$address = new Address($street, $number, $zip, $city, $company);
		$this->customer->setDeliveryAddress($address);

		return $this;
	}

	public function addContactPhone(string $prefix, string $number): self
	{
		$phone = new Phone($prefix, $number);
		$this->customer->setPhone($phone);

		return $this;
	}

	public function getCustomer(): Customer
	{
		return $this->customer;
	}
}
