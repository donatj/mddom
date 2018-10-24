<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

/**
 * Block Level Code Element
 *
 * Example:
 *
 * 	```php
 * 	echo "Hello World"
 * 	```
 *
 * @package donatj\MDDom
 */
class CodeBlock extends AbstractElement implements BlockElementInterface {

	/** @var string */
	protected $source;
	/** @var string|null */
	protected $language;

	/**
	 * CodeBlock constructor.
	 *
	 * @param string      $source Source code
	 * @param string|null $language Optional language name, e.g. php, js, ruby etc
	 */
	public function __construct( $source, $language = null ) {
		$this->source   = $source;
		$this->language = $language;
	}

	/**
	 * @param int $fragmentLevel
	 * @return string
	 */
	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$max = 2;
		preg_match_all('/```+/', $this->source, $result, PREG_PATTERN_ORDER);
		if( $result[0] ) {
			$max = max(array_map('\\strlen', $result[0]));
		}

		$quote = str_repeat('`', $max + 1);

		return "{$quote}{$this->language}\n{$this->source}\n{$quote}";
	}

}
