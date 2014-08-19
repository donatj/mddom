<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

class DocumentDepth extends AbstractNestingElement implements BlockElementInterface {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$content = trim(parent::generateMarkdown($fragmentLevel));

		return $content;
	}

}
