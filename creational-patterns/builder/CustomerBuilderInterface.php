<?php

namespace console\models\designpatterns\creationalpatterns\builder;

interface CustomerBuilderInterface
{
	public function createCustomer(string $salutation, string $prename, string $surname);
	public function addEmail(string $email);
	public function addPassword(string $password);
	public function addAddress(string $street, string $number, string $zip, string $city, ?string $company = null);
	public function addDeliveryAddress(string $street, string $number, string $zip, string $city, ?string $company = null);
	public function addContactPhone(string $prefix, string $number);
	public function getCustomer(): Customer;
}
