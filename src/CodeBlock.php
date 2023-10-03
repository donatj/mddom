<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

/**
 * Block Level Code Element
 *
 * Example:
 *
 *    ```php
 *    echo "Hello World"
 *    ```
 */
class CodeBlock extends AbstractElement implements BlockElementInterface {

	/** @var string */
	protected $source;
	/** @var string|null */
	protected $language;

	/**
	 * CodeBlock constructor.
	 *
	 * @param string      $source   Source code
	 * @param string|null $language Optional language name, e.g. php, js, ruby etc
	 */
	public function __construct( string $source, ?string $language = null ) {
		$this->source   = $source;
		$this->language = $language;
	}

	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		$max = 2;
		preg_match_all('/```+/', $this->source, $result, PREG_PATTERN_ORDER);
		if( $result[0] ) {
			$max = max(array_map('\\strlen', $result[0]));
		}

		$quote = str_repeat('`', $max + 1);

		return "{$quote}{$this->language}\n{$this->source}\n{$quote}";
	}

}
