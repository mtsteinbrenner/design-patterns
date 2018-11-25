<?php

namespace console\models\designpatterns\structuralpatterns\composite;

class DebuggerComposite implements DebuggerInterface
{
	protected $debugger = [];

	public function addDebugger(DebuggerInterface $debugger)
	{
		$this->debugger[] = $debugger;
	}

	public function debug(string $message = ''): void
	{
		foreach ($this->debugger as $debugger) {
			$debugger->debug($message);
		}
	}
}
