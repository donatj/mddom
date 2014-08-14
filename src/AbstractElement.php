<?php

namespace donatj\MDDom;

abstract class AbstractElement {

	/**
	 * @param int $fragmentLevel
	 * @return string
	 */
	abstract public function exportMarkdown( $fragmentLevel = 0 );

	protected $parentElement = null;

	/**
	 * @param AbstractElement $element
	 * @access private
	 */
	public function _setParent( AbstractElement $element ) {
		$this->parentElement = $element;
	}

	/**
	 * @return null
	 */
	public function getParentElement() {
		return $this->parentElement;
	}



}