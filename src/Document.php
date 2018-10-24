<?php

namespace donatj\MDDom;

/**
 * Document Root
 *
 * @package donatj\MDDom
 */
class Document extends AbstractNestingElement {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		return trim(parent::generateMarkdown($fragmentLevel));
	}

}
