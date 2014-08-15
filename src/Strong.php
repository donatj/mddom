<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\InlineElementInterface;

class Strong extends AbstractNestingElement implements InlineElementInterface {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$return = "**";
		$return .= parent::generateMarkdown($fragmentLevel);
		$return .= "**";

		return $return;
	}

}
