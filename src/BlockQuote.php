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
	protected $fragmentLevel = false;

	/**
	 * @param AbstractElement|float|int|null|string ...$children
	 */
	public function __construct( ...$children ) {
		$this->fragmentLevel = false;

		if( array_key_exists(0, $children) && (is_int($children[0]) || $children[0] === null) ) {
			$this->fragmentLevel = $children[0];
			unset($children[0]);
			$children = array_values($children);
		}

		/** @var array<int, AbstractElement|float|int|string> $children */
		parent::__construct(...$children);
	}

	/**
	 * @param AbstractElement|float|int|string ...$children
	 */
	public static function withCurrentFragmentLevel( ...$children ) : self {
		return new self(null, ...$children);
	}

	/**
	 * @param AbstractElement|float|int|string ...$children
	 */
	public static function withFragmentLevel( int $fragmentLevel, ...$children ) : self {
		return new self($fragmentLevel, ...$children);
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
