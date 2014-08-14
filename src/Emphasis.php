<?php

namespace donatj\MDDom;

class Emphasis extends AbstractNestingElement {

	public function exportMarkdown( $fragmentLevel = 0 ) {
		$return = "*";
		$return .= parent::exportMarkdown($fragmentLevel);
		$return .= "*";

		return $return;
	}

}
