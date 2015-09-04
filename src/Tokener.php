<?php

namespace TobyMaxham\Tokener;

use TobyMaxham\Tokener\Ling\Genus;
use TobyMaxham\Tokener\Ling\Translation;
use TobyMaxham\Tokener\Sheet\Sheet;

/**
 * Class Tokener
 * @package TobyMaxham\Tokener
 * @author Tobias Maxham <git2015@maxham.de>
 */
class Tokener
{

	/**
	 * @var Sheet
	 */
	private $sheet;

	private $source;

	/**
	 * @param Sheet $sheet
	 */
	public function __construct(Sheet $sheet)
	{
		$this->sheet = $sheet;
	}

	protected function runLing()
	{
		$this->source = (new Genus($this->source))->exec();
		$this->source = (new Translation($this->source))->exec();
	}

	/**
	 * @return mixed
	 */
	public function __toString()
	{
		$this->runLing();
		return $this->source;
	}

}
