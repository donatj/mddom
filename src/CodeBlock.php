<?php

namespace donatj\MDDom;

class CodeBlock extends Code {

	protected $language;

	function __construct( $source, $language = null ) {
		$this->language = $language;
		parent::__construct($source);
	}

	/**
	 * @param int $fragmentLevel
	 * @return string
	 */
	public function exportMarkdown( $fragmentLevel = 0 ) {
		return "\n\n```{$this->language}\n{$this->source}\n```\n";

	}

}
