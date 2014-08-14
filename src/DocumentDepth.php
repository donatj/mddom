<?php

namespace donatj\MDDom;

class DocumentDepth extends AbstractNestingElement {

	public function exportMarkdown( $fragmentLevel = 0 ) {
		$content = trim(parent::exportMarkdown($fragmentLevel));

		if( $fragmentLevel > 0 ) {
			return "\n\n{$content}\n";
		}

		return $content . "\n";

	}

}
