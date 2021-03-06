<?php

namespace donatj\MDDom;

// @todo might be worth figuring out if SplStack would work for this.
abstract class AbstractNestingElement extends AbstractElement {

	/**
	 * AbstractNestingElement constructor.
	 *
	 * @param AbstractElement|int|float|string $child,... Child Elements to Append
	 */
	public function __construct($child = null /* .. AbstractElement $element .. */) {
		call_user_func_array([ $this, 'appendChild' ], func_get_args());
	}

	/**
	 * @var AbstractElement[]
	 */
	protected $childElements = [];

	/**
	 * Inject One Or More Elements
	 *
	 * @param AbstractElement|int|float|string $child,... Child Elements to Append
	 * @return $this
	 *
	 * @throws \InvalidArgumentException
	 */
	public function appendChild( $child = null /* .. AbstractElement $element .. */ ) {
		$arg_list = func_get_args();

		foreach( $arg_list as $arg ) {
			if( $arg instanceof AbstractElement ) {
				$inject = $arg;
			} elseif( is_scalar($arg) ) {
				$inject = new Text($arg);
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
	 * @param AbstractElement $element
	 * @return bool False if the given element was not found.
	 */
	public function removeChild( AbstractElement $element ) {
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
	 * @param int $fragmentLevel
	 * @return string
	 */
	protected function generateMarkdown( $fragmentLevel = 0 ) {
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

	/**
	 * Get the index of a child element or null if not found.
	 *
	 * @param AbstractElement $element
	 * @return int|null
	 */
	public function indexOf( AbstractElement $element ) {
		$search_result = array_search($element, $this->childElements, true);

		return $search_result === false ? null : $search_result;
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
	 * Get the next sibling of a given child element or null if not found
	 *
	 * @param AbstractElement $element
	 * @return AbstractElement|null
	 */
	public function getNextSiblingOf( AbstractElement $element ) {
		$index = $this->indexOf($element);

		return $this->childAtIndex($index + 1);
	}

	/**
	 * Get the previous sibling of a given child element or null if not found
	 *
	 * @param AbstractElement $element
	 * @return AbstractElement|null
	 */
	public function getPreviousSiblingOf( AbstractElement $element ) {
		$index = $this->indexOf($element);

		return $this->childAtIndex($index - 1);
	}

}
