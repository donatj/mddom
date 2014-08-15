<?php

namespace donatj\MDDom;

class Anchor extends AbstractElement {

	protected $href;
	protected $text;
	protected $title;

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
