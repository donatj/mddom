<?php

namespace donatj\MDDom;

/**
 * Strong Element
 *
 * Example:
 *
 *    **bold**
 */
class Strong extends AbstractNestingElement {

	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		$return = "**";
		$return .= parent::generateMarkdown($fragmentLevel);
		$return .= "**";

		return $return;
	}

}
