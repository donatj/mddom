<?php

namespace donatj\MDDom;

class Header extends AbstractNestingElement {

	public function exportMarkdown( $fragmentLevel = 0 ) {
		$data = str_repeat("#", $fragmentLevel + 1) . " " . parent::exportMarkdown($fragmentLevel) . "\n\n";

		if($this->getPreviousSibling()) {
			$data = "\n\n" . $data;
		}

		return $data;
	}

}
