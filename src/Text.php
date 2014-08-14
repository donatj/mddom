<?php

namespace donatj\MDDom;

class Text extends AbstractElement {

	protected $text;

	function __construct( $text ) {
		$this->text = $text;
	}

	/**
	 * @param int $fragmentLevel
	 * @return string
	 */
	public function exportMarkdown( $fragmentLevel = 0 ) {
		return $this->text;
	}

}
 