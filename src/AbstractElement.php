<?php

namespace donatj\MDDom;

abstract class AbstractElement {

	/**
	 * @param int $fragmentLevel
	 * @return string
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
	 * @return null
	 */
	public function getParentElement() {
		return $this->parentElement;
	}

	/**
	 * @return AbstractElement|null
	 */
	public function getPreviousSibling() {
		if( !$this->parentElement ) {
			return null; //throw exception?
		}

		return $this->parentElement->getPreviousSiblingOf($this);
	}

	/**
	 * @return AbstractElement|null
	 */
	public function getNextSibling() {
		if( !$this->parentElement ) {
			return null; //throw exception?
		}

		return $this->parentElement->getNextSiblingOf($this);
	}

}