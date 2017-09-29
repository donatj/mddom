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
	function __construct( $source, $language = null ) {
		$this->source   = $source;
		$this->language = $language;
	}

	/**
	 * @param int $fragmentLevel
	 * @return string
	 */
	protected function generateMarkdown( $fragmentLevel = 0 ) {
		return "```{$this->language}\n{$this->source}\n```";
	}

}
