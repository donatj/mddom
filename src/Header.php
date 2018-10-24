<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

/**
 * Header "H{n}" Element
 *
 * The {n} of the generated H element is determined by it's nesting depth within DocumentDepth's
 *
 * Example:
 *
 * 	### H3 Element
 *
 * @package donatj\MDDom
 */
class Header extends AbstractNestingElement implements BlockElementInterface {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$display = max($fragmentLevel, 0) + 1;

		return str_repeat("#", min($display, 6)) .
				   str_repeat("+", max($display - 6, 0)) .
				   " " . parent::generateMarkdown($fragmentLevel);
	}

}
