<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

class HorizontalRule extends AbstractElement implements BlockElementInterface {

	protected function generateMarkdown( $fragmentLevel = 0 ) {
		return '---------------------------------------';
	}

}
 