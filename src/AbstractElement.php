<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

abstract class AbstractElement {

	/** @var AbstractNestingElement|null */
	protected $parentElement;

	/**
	 * Convert the DOM to Markdown
	 *
	 * @param int $fragmentLevel Private use - recursion depth counter
	 * @return string Markdown
	 */
	public function exportMarkdown( int $fragmentLevel = 0 ) : string {
		$output = "";
		if( $this instanceof BlockElementInterface || $this->getPreviousSibling() instanceof BlockElementInterface ) {
			$output .= "\n\n";
		}

		$output .= ltrim($this->generateMarkdown($fragmentLevel), "\n");

		return $output;
	}

	/**
	 * Get the Current Elements Previous Sibling
	 */
	public function getPreviousSibling() : ?AbstractElement {
		if( !$this->parentElement ) {
			return null; //throw exception?
		}

		return $this->parentElement->getPreviousSiblingOf($this);
	}

	abstract protected function generateMarkdown( int $fragmentLevel = 0 ) : string;

	/**
	 * @access private
	 */
	public function _setParent( AbstractNestingElement $element ) : void {
		$this->parentElement = $element;
	}

	/**
	 * Get the Elements Parent or Null if Top Level
	 */
	public function getParentElement() : ?AbstractElement {
		return $this->parentElement;
	}

	/**
	 * Get the Current Elements Next Sibling
	 */
	public function getNextSibling() : ?AbstractElement {
		if( !$this->parentElement ) {
			return null; //throw exception?
		}

		return $this->parentElement->getNextSiblingOf($this);
	}

}
