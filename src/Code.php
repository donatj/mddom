<?php

namespace donatj\MDDom;

/**
 * Inline Code Element
 *
 * Example:
 *
 *    `<br />`
 */
class Code extends AbstractElement {

	/** @var string */
	protected $source;

	/**
	 * @param string $source The source code to contain within the code element
	 */
	public function __construct( string $source ) {
		$this->source = $source;
	}

	/**
	 * @todo handle strings that start or end with backtick
	 */
	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		$max = 0;
		preg_match_all('/`+/', $this->source, $result, PREG_PATTERN_ORDER);
		if( $result[0] ) {
			$max = max(array_map('\\strlen', $result[0]));
		}

		$quote = str_repeat('`', $max + 1);

		return "{$quote}{$this->source}{$quote}";
	}

}
