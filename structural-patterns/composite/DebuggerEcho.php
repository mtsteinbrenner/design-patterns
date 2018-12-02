<?php

namespace console\models\designpatterns\structuralpatterns\composite;

class DebuggerEcho implements DebuggerInterface
{
	public function debug(string $message = ''): void
	{
		echo $message . PHP_EOL;
	}
}
