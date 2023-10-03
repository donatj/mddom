<?php

namespace donatj\MDDom;

// @todo might be worth figuring out if SplStack would work for this.

abstract class AbstractNestingElement extends AbstractElement {

	/** @var AbstractElement[] */
	protected $childElements = [];

	/**
	 * AbstractNestingElement constructor.
	 *
	 * @param AbstractElement|float|int|string ...$children Child Elements to Append
	 */
	public function __construct( ...$children ) {
		$this->appendChild(...$children);
	}

	/**
	 * Inject One Or More Elements
	 *
	 * @param AbstractElement|float|int|string ...$children Child Elements to Append
	 * @throws \InvalidArgumentException
	 * @return $this
	 */
	public function appendChild( ...$children ) : AbstractNestingElement {
		foreach( $children as $child ) {
			if( $child instanceof AbstractElement ) {
				$inject = $child;
			} elseif( is_scalar($child) ) {
				$inject = new Text($child);
			} else {
				throw new \InvalidArgumentException;
			}

			$inject->_setParent($this);
			$this->childElements[] = $inject;
		}

		return $this;
	}

	/**
	 * Remove a child element
	 *
	 * @return bool False if the given element was not found.
	 */
	public function removeChild( AbstractElement $element ) : bool {
		$index = $this->indexOf($element);
		if( $index !== null ) {
			unset($this->childElements[$index]);

			//Remove any gaps
			$this->childElements = array_values($this->childElements);

			return true;
		}

		return false;
	}

	/**
	 * Get the index of a child element or null if not found.
	 */
	public function indexOf( AbstractElement $element ) : ?int {
		$search_result = array_search($element, $this->childElements, true);

		return $search_result === false ? null : $search_result;
	}

	/**
	 * Get the next sibling of a given child element or null if not found
	 */
	public function getNextSiblingOf( AbstractElement $element ) : ?AbstractElement {
		$index = $this->indexOf($element);

		return $this->childAtIndex($index + 1);
	}

	/**
	 * Gets the child element at a given index or null if not found.
	 *
	 * @param int $index
	 * @return AbstractElement|null
	 */
	public function childAtIndex( $index ) {
		if( $index !== null && isset($this->childElements[$index]) ) {
			return $this->childElements[$index];
		}

		return null;
	}

	/**
	 * Get the previous sibling of a given child element or null if not found
	 */
	public function getPreviousSiblingOf( AbstractElement $element ) : ?AbstractElement {
		$index = $this->indexOf($element);

		return $this->childAtIndex($index - 1);
	}

	protected function generateMarkdown( int $fragmentLevel = 0 ) : string {
		$return = "";

		foreach( $this->childElements as $childElement ) {
			if( $childElement instanceof DocumentDepth ) {
				$return .= $childElement->exportMarkdown($fragmentLevel + 1);
			} else {
				$return .= $childElement->exportMarkdown($fragmentLevel);
			}
		}

		return $return;
	}

}
