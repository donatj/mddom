<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

/**
 * Block Level Horizontal Rule Element
 *
 * Example:
 *
 * 	---
 *
 * @package donatj\MDDom
 */
class HorizontalRule extends AbstractElement implements BlockElementInterface {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		return '---';
	}

}
 