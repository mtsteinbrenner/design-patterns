<?php

namespace console\models\designpatterns\structuralpatterns\adapter;

class ApiOrderAdapter implements OrderInterface
{
	protected $apiResult;

	public function __construct(ApiOrderResult $result)
	{
		$this->apiResult = $result;
	}

	public function getId(): int
	{
		return $this->apiResult->getId();
	}

	public function getArticle(): Article
	{
		return Article::findOne($this->apiResult->getArticleId());
	}

	public function getTariff(): Tariff
	{
		return Tariff::findOne($this->apiResult->getTariffId());
	}

	public function getAccessories(): array
	{
		$accessories = [];

		foreach ($this->apiResult->getAccessoryIds() as $accessoryId) {
			$accessories[] = Accessory::findOne($accessoryId);
		}

		return $accessories;
	}

	public function getPrice(): float
	{
		return $this->apiResult->getPrice();
	}
}
