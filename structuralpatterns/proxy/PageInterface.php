<?php

namespace console\models\designpatterns\structuralpatterns\proxy;

interface PageInterface
{
	public function display(User $user): void;
}
