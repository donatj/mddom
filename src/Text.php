<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\InlineElementInterface;

class Text extends AbstractElement implements InlineElementInterface {

	protected $text;

	function __construct( $text ) {
		$this->text = $text;
	}

	/**
	 * @param int $fragmentLevel
	 * @return string
	 */
	protected function generateMarkdown( $fragmentLevel = 0 ) {
		return $this->text;
	}

}
 