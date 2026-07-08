<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

/**
 * BlockQuote Element
 *
 * Example:
 *
 *    > Quoted text here
 */
class BlockQuote extends AbstractNestingElement implements BlockElementInterface {

	/** @var int|null */
	protected $fragmentLevel;

	/**
	 * @param int|null                         $fragmentLevel Fragment level override. null inherits current level, int sets an explicit level (0 resets to top).
	 * @param AbstractElement|float|int|string ...$children
	 */
	public function __construct( ?int $fragmentLevel, ...$children ) {
		$this->fragmentLevel = $fragmentLevel;

		parent::__construct(...$children);
	}

	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		if( $this->fragmentLevel !== null ) {
			$fragmentLevel = $this->fragmentLevel;
		}

		$markdown = str_replace(["\r\n", "\r"], "\n", parent::generateMarkdown($fragmentLevel));

		return '> ' . str_replace("\n", "\n> ", trim($markdown));
	}

}
