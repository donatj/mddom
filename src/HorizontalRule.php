<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

/**
 * Block Level Horizontal Rule Element
 *
 * Example:
 *
 *    ---
 */
class HorizontalRule extends AbstractElement implements BlockElementInterface {

	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		return '---';
	}

}
