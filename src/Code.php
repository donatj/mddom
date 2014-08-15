<?php

namespace donatj\MDDom;

class Code extends AbstractElement {

	protected $source;

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
