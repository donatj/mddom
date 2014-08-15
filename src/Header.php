<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

class Header extends AbstractNestingElement implements BlockElementInterface {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		$data = str_repeat("#", $fragmentLevel + 1) . " " . parent::generateMarkdown($fragmentLevel);

		return $data;
	}

}
