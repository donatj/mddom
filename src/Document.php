<?php

namespace donatj\MDDom;

class Document extends AbstractNestingElement {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$content = trim(parent::generateMarkdown($fragmentLevel));

		return $content;
	}

}
