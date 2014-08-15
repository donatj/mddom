<?php

namespace donatj\MDDom;

class DocumentDepth extends AbstractNestingElement {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$content = trim(parent::generateMarkdown($fragmentLevel));

		return $content;

	}

}
