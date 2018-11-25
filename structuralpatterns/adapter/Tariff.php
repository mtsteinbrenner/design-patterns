<?php

namespace console\models\designpatterns\structuralpatterns\adapter;

class Tariff
{
	protected $id;

	public function __construct(int $id)
	{
		$this->id = $id;
	}

	public static function findOne(int $id): self
	{
		// normally it would look in db
		return new self($id);
	}
}
