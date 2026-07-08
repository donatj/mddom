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

	/** @var bool|int */
	protected $fragmentLevel = false;

	/**
	 * @param AbstractElement|bool|float|int|string ...$children
	 */
	public function __construct( ...$children ) {
		$this->fragmentLevel = false;

		if( isset($children[0]) && (is_bool($children[0]) || is_int($children[0])) ) {
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
		return new self(true, ...$children);
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
