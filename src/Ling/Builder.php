<?php

namespace TobyMaxham\Tokener\Ling;

/**
 * Class Builder
 * @package TobyMaxham\Tokener\Ling
 * @author Tobias Maxham <git2015@maxham.de>
 */
class Builder
{
	/**
	 * @var string
	 */
	private $text;

	/**
	 * @param string $text
	 */
	public function __construct($text)
	{
		$this->text = $text;
	}

	/**
	 * @return \TobyMaxham\Tokener\Ling\Builder $this
	 */
	public function exec()
	{
		return $this;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->text;
	}

}