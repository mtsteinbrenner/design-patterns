<?php

namespace console\models\designpatterns\structuralpatterns\composite;

class DebuggerFile implements DebuggerInterface
{
	private const PATH = 'console/models/designpatterns/structuralpatterns/composite/';

	protected $file;

	public function __construct(string $file = 'log.txt')
	{
		$this->file = self::PATH . $file;
	}

	public function debug(string $message = ''): void
	{
		file_put_contents($this->file, $message . PHP_EOL, FILE_APPEND);
	}
}
