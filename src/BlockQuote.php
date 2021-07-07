<?php

namespace donatj\MDDom;

class BlockQuote extends AbstractNestingElement {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$markdown = parent::generateMarkdown($fragmentLevel);

		return preg_replace('/(^)/m', '$1> ', trim($markdown));
	}

}
