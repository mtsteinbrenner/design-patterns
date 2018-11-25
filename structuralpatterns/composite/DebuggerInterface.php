<?php

namespace console\models\designpatterns\structuralpatterns\composite;

interface DebuggerInterface
{
	public function debug(string $message = ''): void;
}
