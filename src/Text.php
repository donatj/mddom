<?php

namespace donatj\MDDom;

/**
 * Markdown Raw Text Element
 *
 * @package donatj\MDDom
 */
class Text extends AbstractElement {

	/** @var string */
	protected $text;

	/**
	 * @param string $text
	 */
	public function __construct( $text ) {
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
