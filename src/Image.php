<?php

namespace donatj\MDDom;

/**
 * Image Element
 *
 * @package donatj\MDDom
 */
class Image extends AbstractElement {

	/** @var string */
	protected $src;
	/** @var string */
	protected $alt;
	/** @var string */
	protected $title;

	/**
	 * Image constructor.
	 *
	 * @param string $src URL of given image
	 * @param string $alt Alt Text for Accessibility
	 * @param string $title Optional "hover" title value
	 */
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
