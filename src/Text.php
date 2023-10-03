<?php

namespace donatj\MDDom;

/**
 * Markdown Raw Text Element
 */
class Text extends AbstractElement {

	/** @var string */
	protected $text;

	public function __construct( string $text ) {
		$this->text = $text;
	}

	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		return $this->text;
	}

}
