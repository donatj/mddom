<?php

namespace donatj\MDDom;

use donatj\MDDom\Interfaces\BlockElementInterface;

abstract class AbstractElement {

	abstract protected function generateMarkdown( $fragmentLevel = 0 );

	/**
	 * Convert the DOM to Markdown
	 *
	 * @param int $fragmentLevel Private use - recursion depth counter
	 * @return string Markdown
	 */
	public function exportMarkdown( $fragmentLevel = 0 ) {
		$output = "";
		if( $this instanceof BlockElementInterface || $this->getPreviousSibling() instanceof BlockElementInterface ) {
			$output .= "\n\n";
		}

		$output .= ltrim($this->generateMarkdown($fragmentLevel), "\n");

		return $output;
	}

	/**
	 * @var null|AbstractNestingElement
	 */
	protected $parentElement = null;

	/**
	 * @param AbstractNestingElement $element
	 * @access private
	 */
	public function _setParent( AbstractNestingElement $element ) {
		$this->parentElement = $element;
	}

	/**
	 * Get the Elements Parent or Null if Top Level
	 *
	 * @return AbstractElement|null
	 */
	public function getParentElement() {
		return $this->parentElement;
	}

	/**
	 * Get the Current Elements Previous Sibling
	 *
	 * @return AbstractElement|null
	 */
	public function getPreviousSibling() {
		if( !$this->parentElement ) {
			return null; //throw exception?
		}

		return $this->parentElement->getPreviousSiblingOf($this);
	}

	/**
	 * Get the Current Elements Next Sibling
	 *
	 * @return AbstractElement|null
	 */
	public function getNextSibling() {
		if( !$this->parentElement ) {
			return null; //throw exception?
		}

		return $this->parentElement->getNextSiblingOf($this);
	}

}