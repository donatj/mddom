<?php

namespace donatj\MDDom;

/**
 * Document Root
 */
class Document extends AbstractNestingElement {

	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		return trim(parent::generateMarkdown($fragmentLevel));
	}

}
