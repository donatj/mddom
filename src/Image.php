<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\InlineElementInterface;

class Image extends AbstractElement implements InlineElementInterface {

	protected $src;
	protected $alt;
	protected $title;

	function __construct( $src, $alt, $title = "" ) {
		$this->src   = $src;
		$this->alt   = $alt;
		$this->title = $title;
	}

	/**
	 * @param int $fragmentLevel
	 * @return string
	 */
	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$title = $this->title ? ' "' . $this->title . '"' : '';

		return "![{$this->alt}]({$this->src}{$title})";
	}

}
