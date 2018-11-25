<?php

namespace console\models\designpatterns\structuralpatterns\proxy;

class User
{
	protected $id;
	protected $role;

	public function __construct(int $id, string $role)
	{
		$this->id = $id;
		$this->role = $role;
	}

	public function getId(): int
	{
		return $this->id;
	}

	public function isAdmin(): bool
	{
		return $this->role === 'admin';
	}
}
