<?php

namespace donatj\MDDom;

/**
 * Image Element
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
	 * @param string $src   URL of given image
	 * @param string $alt   Alt Text for Accessibility
	 * @param string $title Optional "hover" title value
	 */
	public function __construct( string $src, string $alt, string $title = "" ) {
		$this->src   = $src;
		$this->alt   = $alt;
		$this->title = $title;
	}

	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		$title = $this->title ? ' "' . $this->title . '"' : '';

		return "![{$this->alt}]({$this->src}{$title})";
	}

}
