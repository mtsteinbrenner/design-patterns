<?php

namespace console\models\designpatterns\creationalpatterns\builder;

class Director
{
	private $builder;

	public function __construct(CustomerBuilderInterface $builder)
	{
		$this->builder = $builder;
	}

	public function createNewCustomer(array $data)
	{
		return $this->builder
			->createCustomer($data['salutation'], $data['prename'], $data['surname'])
			->addEmail($data['email'])
			->addPassword($data['password'])
			->addContactPhone($data['phone_prefix'], $data['phone_number'])
			->addAddress($data['street'], $data['street_number'], $data['zip'], $data['city'], $data['company'])
			->getCustomer();
	}
}
