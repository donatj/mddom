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
	protected $fragmentLevel = 0;

	/**
	 * @param AbstractElement|bool|float|int|string|null $fragmentLevelOrChild
	 * @param AbstractElement|float|int|string           ...$children
	 */
	public function __construct( $fragmentLevelOrChild = false, ...$children ) {
		if( $fragmentLevelOrChild === true || $fragmentLevelOrChild === null ) {
			$this->fragmentLevel = null;
		} elseif( $fragmentLevelOrChild === false ) {
			$this->fragmentLevel = 0;
		} elseif( is_int($fragmentLevelOrChild) ) {
			$this->fragmentLevel = $fragmentLevelOrChild;
		} else {
			$this->fragmentLevel = 0;
			array_unshift($children, $fragmentLevelOrChild);
		}

		parent::__construct(...$children);
	}

	/**
	 * @param AbstractElement|float|int|string ...$children
	 */
	public static function withCurrentFragmentLevel( ...$children ) : self {
		return new self(true, ...$children);
	}

	/**
	 * @param AbstractElement|float|int|string ...$children
	 */
	public static function withFragmentLevel( int $fragmentLevel, ...$children ) : self {
		return new self($fragmentLevel, ...$children);
	}

	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		if( $this->fragmentLevel !== null ) {
			$fragmentLevel = $this->fragmentLevel;
		}

		$markdown = str_replace(["\r\n", "\r"], "\n", parent::generateMarkdown($fragmentLevel));

		return '> ' . str_replace("\n", "\n> ", trim($markdown));
	}

}
