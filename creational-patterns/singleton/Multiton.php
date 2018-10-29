<?php

namespace console\models\designpatterns\creationalpatterns\singleton;

use Exception;

class Multiton
{
	public const INSTANCES = [
		'standard',
		'different',
	];

	private static $_instances = [];

	protected $key;

	protected function __construct($key) {
		$this->key = $key;
	}

	private function __clone() {}
	private function __wakeup() {}

	public static function getInstance(string $key): self
	{
		if (!in_array($key, self::INSTANCES)) {
			throw new Exception('no matching instance');
		}

		if (!isset(self::$_instances[$key])) {
			self::$_instances[$key] = new self($key);
		}

		return self::$_instances[$key];
	}
}
