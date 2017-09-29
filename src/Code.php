<?php

namespace donatj\MDDom;

/**
 * Inline Code Element
 *
 * Example:
 *
 * 	`<br />`
 *
 * @package donatj\MDDom
 */
class Code extends AbstractElement {

	/** @var string */
	protected $source;

	/**
	 * @param string $source
	 */
	function __construct( $source ) {
		$this->source = $source;
	}

	/**
	 * @param int $fragmentLevel
	 * @return string
	 */
	protected function generateMarkdown( $fragmentLevel = 0 ) {
		return "`{$this->source}`";
	}

}
