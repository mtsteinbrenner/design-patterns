<?php

namespace console\models\designpatterns\creationalpatterns\prototype;

class TariffFeatures
{
	protected $dataLimit = 0;
	protected $musicPass = false;
	protected $videoPass = false;
	protected $flatrate = false;

	public function setDataLimit(int $limit): self
	{
		$this->dataLimit = $limit;

		return $this;
	}

	public function addMusicPass(): self
	{
		$this->musicPass = true;

		return $this;
	}

	public function addVideoPass(): self
	{
		$this->videoPass = true;

		return $this;
	}

	public function addFlatrate(): self
	{
		$this->flatrate = true;

		return $this;
	}

	public function resetMusicPass(): self
	{
		$this->musicPass = false;

		return $this;
	}

	public function resetFlatrate(): self
	{
		$this->flatrate = false;

		return $this;
	}

	public function resetVideoPass(): self
	{
		$this->videoPass = false;

		return $this;
	}

	public function getDataLimit(): int
	{
		return $this->dataLimit;
	}

	public function hasVideoPass(): bool
	{
		return $this->videoPass;
	}

	public function hasMusicPass(): bool
	{
		return $this->musicPass;
	}

	public function hasFlatrate(): bool
	{
		return $this->flatrate;
	}
}
