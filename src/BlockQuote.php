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

	/** @var false|int|null */
	protected $fragmentLevel;

	/**
	 * @param false|int|null                   $fragmentLevel Fragment level override. false resets to 0, null inherits current level, int sets an explicit level.
	 * @param AbstractElement|float|int|string ...$children
	 */
	public function __construct( $fragmentLevel, ...$children ) {
		$this->fragmentLevel = $fragmentLevel;

		parent::__construct(...$children);
	}

	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		if( is_int($this->fragmentLevel) ) {
			$fragmentLevel = $this->fragmentLevel;
		} elseif( $this->fragmentLevel === false ) {
			$fragmentLevel = 0;
		}

		$markdown = str_replace(["\r\n", "\r"], "\n", parent::generateMarkdown($fragmentLevel));

		return '> ' . str_replace("\n", "\n> ", trim($markdown));
	}

}
