<?php

namespace donatj\MDDom;

/**
 * Inline Anchor "a tag" Element
 *
 * @package donatj\MDDom
 */
class Anchor extends AbstractElement {

	/** @var string */
	protected $href;
	/** @var string */
	protected $text;
	/** @var string */
	protected $title;

	/**
	 * Anchor constructor.
	 *
	 * @param string $href The link of the URL
	 * @param string $text The text within the a tag
	 * @param string $title Optional "hover" title value
	 */
	public function __construct( $href, $text, $title = "" ) {
		$this->href  = $href;
		$this->text  = $text;
		$this->title = $title;
	}

	/**
	 * @param int $fragmentLevel
	 * @return string
	 */
	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$title = $this->title ? ' "' . $this->title . '"' : '';

		return "[{$this->text}]({$this->href}{$title})";
	}

}
