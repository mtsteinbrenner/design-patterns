<?php

namespace console\models\designpatterns\structuralpatterns\adapter;

interface OrderInterface
{
	public function getId(): int;
	public function getArticle(): Article;
	public function getTariff(): Tariff;
	public function getAccessories(): array;
	public function getPrice(): float;
}
