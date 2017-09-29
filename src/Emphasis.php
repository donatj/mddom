<?php

namespace donatj\MDDom;

/**
 * Inline Emphasis Element
 *
 * Example:
 *
 * 	*italic*
 *
 * @package donatj\MDDom
 */
class Emphasis extends AbstractNestingElement {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$return = "*";
		$return .= parent::generateMarkdown($fragmentLevel);
		$return .= "*";

		return $return;
	}

}
