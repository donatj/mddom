<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

class CodeBlock extends AbstractElement implements BlockElementInterface {

	protected $source;
	protected $language;

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
