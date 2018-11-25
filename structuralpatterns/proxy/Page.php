<?php

namespace console\models\designpatterns\structuralpatterns\proxy;

class Page implements PageInterface
{
	protected $url;

	public function __construct(string $url)
	{
		$this->url = $url;
	}

	public function display(User $user): void
	{
		// render page logic
		echo sprintf('Displaying page %s to User %s', $this->url, $user->getId()) . PHP_EOL;
	}
}
