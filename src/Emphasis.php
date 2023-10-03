<?php

namespace donatj\MDDom;

/**
 * Inline Emphasis Element
 *
 * Example:
 *
 *    *italic*
 */
class Emphasis extends AbstractNestingElement {

	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		$return = "*";
		$return .= parent::generateMarkdown($fragmentLevel);
		$return .= "*";

		return $return;
	}

}
