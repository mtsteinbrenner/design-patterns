<?php

namespace console\models\designpatterns\structuralpatterns\adapter;

class ApiOrderResult
{
	protected $id;
	protected $price;
	protected $tariff_id;
	protected $article_id;
	protected $accessories;

	public function getId(): int
	{
		return $this->id;
	}

	public function getPrice(): float
	{
		return $this->price;
	}

	public function getTariffId(): int
	{
		return $this->tariff_id;
	}

	public function getArticleId(): int
	{
		return $this->article_id;
	}

	public function getAccessories(): array
	{
		return $this->accessories;
	}
}
