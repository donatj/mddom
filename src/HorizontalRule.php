<?php

namespace donatj\MDDom;

class HorizontalRule extends AbstractElement {

	public function exportMarkdown( $fragmentLevel = 0 ) {
		return "\n\n---\n\n";
	}

}
 