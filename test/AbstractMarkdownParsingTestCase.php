<?php

use donatj\MDDom;

abstract class AbstractMarkdownParsingTestCase extends \PHPUnit\Framework\TestCase {

	/**
	 * @param \donatj\MDDom\Document $doc
	 * @return array
	 */
	protected function getDocStruct( MDDom\Document $doc ) {
		return $this->getDomElementStruct($this->domFromDoc($doc));
	}

	/**
	 * @param \DOMElement $dom
	 * @return array
	 */
	protected function getDomElementStruct( DOMElement $dom ) {
		$data = [];

		$data['tag']      = $dom->tagName;
		$data['children'] = [];
		/** @var \DOMNode $node */
		foreach( $dom->childNodes as $node ) {

			if( $node instanceof DOMElement ) {
				$data['children'][] = $this->getDomElementStruct($node);
			} elseif( $node instanceof DOMText ) {
				if( trim($node->data) != "" ) {
					$data['children'][] = $node->data;
				}
			} else {
				throw new \RuntimeException("unexpected node");
			}
		}

		return $data;
	}

	/**
	 * @param $doc
	 * @return \DOMElement
	 */
	protected function domFromDoc( MDDom\Document $doc ) {
		$p    = new Parsedown();
		$html = $p->parse($doc->exportMarkdown());

		$dom = new DOMDocument();
		$dom->loadHTML("<html><body>{$html}</body></html>", LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

		$body = $dom->getElementsByTagName("body");

		if( count($body) !== 1 ) {
			$this->fail("bad body count");
		}

		return $body->item(0);
	}

}
