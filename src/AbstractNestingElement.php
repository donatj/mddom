<?php

namespace donatj\MDDom;

abstract class AbstractNestingElement extends AbstractElement {

	function __construct() {
		call_user_func_array([$this, 'inject'], func_get_args());
	}


	/**
	 * @var AbstractElement[]
	 */
	protected $childElements = array();

	public function inject( /* .. AbstractElement $element .. */ ) {


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
	}

	/**
	 * @param int $fragmentLevel
	 * @return string
	 */
	public function exportMarkdown( $fragmentLevel = 0 ) {
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
