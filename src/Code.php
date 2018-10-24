<?php

namespace donatj\MDDom;

/**
 * Inline Code Element
 *
 * Example:
 *
 *    `<br />`
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
	 * @todo handle strings that start or end with backtick
	 *
	 * @param int $fragmentLevel
	 * @return string
	 */
	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$max = 0;
		preg_match_all('/`+/', $this->source, $result, PREG_PATTERN_ORDER);
		if( $result[0] ) {
			$max = max(array_map('\\strlen', $result[0]));
		}

		$quote = str_repeat('`', $max + 1);

		return "{$quote}{$this->source}{$quote}";
	}

}
