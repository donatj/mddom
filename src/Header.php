<?php

namespace donatj\MDDom;

class Header extends AbstractNestingElement {

	public function exportMarkdown( $fragmentLevel = 0 ) {
		return "\n\n" . str_repeat("#", $fragmentLevel + 1) . " " . parent::exportMarkdown($fragmentLevel) . "\n\n";
	}

}
 