<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

/**
 * BlockQuote Element
 *
 * Example:
 *
 *    > Quoted text here
 */
class BlockQuote extends AbstractNestingElement implements BlockElementInterface {

	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		$markdown = parent::generateMarkdown($fragmentLevel);

		return '> ' . str_replace("\n", "\n> ", trim($markdown));
	}

}
