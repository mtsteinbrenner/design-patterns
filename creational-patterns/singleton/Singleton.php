<?php

namespace console\models\designpatterns\creationalpatterns\singleton;

class Singleton
{
	private static $_instance = null;

	protected function __construct() {}
	private function __clone() {}
	private function __wakeup() {}

	public static function getInstance(): self
	{
		if (!isset(self::$_instance)) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}
}
