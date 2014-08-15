<?php

namespace donatj\MDDom;

class Image extends AbstractElement {

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
