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
	 * @param AbstractElement|float|int|string ...$children
	 */
	public function __construct( ...$children ) {
		parent::__construct(...$children);
	}

	/**
	 * Create a BlockQuote that inherits the current fragment (header depth) level.
	 *
	 * @param AbstractElement|float|int|string ...$children
	 */
	public static function withCurrentFragmentLevel( ...$children ) : self {
		$instance = new self(...$children);
		$instance->fragmentLevel = null;

		return $instance;
	}

	/**
	 * Create a BlockQuote that starts at the given fragment (header depth) level.
	 *
	 * @param AbstractElement|float|int|string ...$children
	 */
	public static function withFragmentLevel( int $fragmentLevel, ...$children ) : self {
		$instance = new self(...$children);
		$instance->fragmentLevel = $fragmentLevel;

		return $instance;
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
