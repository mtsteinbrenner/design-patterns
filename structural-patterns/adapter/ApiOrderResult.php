<?php

namespace console\models\designpatterns\structuralpatterns\adapter;

class ApiOrderResult
{
	protected $id;
	protected $price;
	protected $tariff_id;
	protected $article_id;
	protected $accessory_ids;

	public function __construct(
		int $id,
		float $price,
		int $tariff_id,
		int $article_id,
		array $accessory_ids = []
	)
	{
		$this->id = $id;
		$this->price = $price;
		$this->tariff_id = $tariff_id;
		$this->article_id = $article_id;
		$this->accessory_ids = $accessory_ids;
	}

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

	public function getAccessoryIds(): array
	{
		return $this->accessory_ids;
	}
}
