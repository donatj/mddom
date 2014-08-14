<?php

namespace donatj\MDDom;

abstract class AbstractElement {

	/**
	 * Convert the DOM to Markdown
	 *
	 * @param int $fragmentLevel For internal recursion use.
	 * @return string Markdown
	 */
	abstract public function exportMarkdown( $fragmentLevel = 0 );

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