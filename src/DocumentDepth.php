<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

/**
 * DocumentDepth
 *
 * An illusory element used for structuring your document into smaller parts.
 *
 * The H level of the `Header` is determined by it's depth within the document.
 *
 * For example:
 *
 * ```php
 * $doc = new \donatj\MDDom\Document;
 * $doc->appendChild(
 * 	new \donatj\MDDom\Header('Level 1')
 * )->appendChild(
 * 	(new \donatj\MDDom\DocumentDepth)->appendChild(
 * 		new \donatj\MDDom\Header('Level 2')
 * 	)
 * );
 * echo $doc->exportMarkdown();
 * ```
 *
 * outputs:
 *
 * ```
 * # Level 1
 *
 * ## Level 2
 * ```
 *
 * @package donatj\MDDom
 */
class DocumentDepth extends Document implements BlockElementInterface {

}
