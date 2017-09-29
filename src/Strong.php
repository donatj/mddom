<?php

namespace donatj\MDDom;

/**
 * Strong Element
 *
 * Example:
 *
 * 	**bold**
 *
 * @package donatj\MDDom
 */
class Strong extends AbstractNestingElement {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$return = "**";
		$return .= parent::generateMarkdown($fragmentLevel);
		$return .= "**";

		return $return;
	}

}
