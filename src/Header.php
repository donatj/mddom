<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

class Header extends AbstractNestingElement implements BlockElementInterface {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$display = max($fragmentLevel, 0) + 1;
		$data    = str_repeat("#", min($display, 6)) .
				   str_repeat("+", max($display - 6, 0)) .
				   " " . parent::generateMarkdown($fragmentLevel);

		return $data;
	}

}
