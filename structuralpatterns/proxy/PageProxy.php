<?php

namespace console\models\designpatterns\structuralpatterns\proxy;

/**
 * Implements a cache behaviour as a proxy design pattern
 * Virtual Proxy: Creates object only if it really is accessed
 * Protective Proxy: Prevents non-admins to access this object
 * Smart Proxy: Handles caching mechanisms with ttl
 */
class PageProxy implements PageInterface
{
	protected $url;
	protected $page;
	protected $expiration;

	public function __construct(string $url)
	{
		$this->url = $url;
	}

	public function display(User $user): void
	{
		if (!$user->isAdmin()) {
			echo sprintf('Access Denied! User %s is no admin', $user->getId()) . PHP_EOL;

			return;
		}

		if (!$this->isValid() || !$this->hasPageCached()) {
			$this->page = new Page($this->url);
			$this->refreshExpiration();
		}

		$this->page->display($user);
	}

	private function isValid(): bool
	{
		return $this->expiration < time();
	}

	private function hasPageCached(): bool
	{
		return $this->page !== null;
	}

	private function refreshExpiration(): void
	{
		$this->expiration = time() + 60*60*24;
	}
}
