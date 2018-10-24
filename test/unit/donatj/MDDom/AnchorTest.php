<?php

namespace donatj\MDDom;

class AnchorTest extends \AbstractMarkdownParsingTestCase {

	/**
	 * @dataProvider anchorGenerationProvider
	 *
	 * @param string $href
	 * @param string $text
	 * @param string $title
	 */
	public function test_AnchorGeneration( $href, $text, $title ) {
		$a = new Anchor($href, $text, $title);

		$elm = $this->domFromDoc($a);
		$a   = $elm->getElementsByTagName('a')[0];

		$expected = [
			'tag'        => 'a',
			'children'   => [ $text ],
			'attributes' => [
				'href' => $href,
			],
		];

		if( $title !== '' ) {
			$expected['attributes']['title'] = $title;
		}

		$this->assertEquals(
			$expected,
			$this->getDomElementStruct($a)
		);
	}

	public function anchorGenerationProvider() {
		return [
			[ 'http://example.com/foo.png', 'alt text', '' ],
			[ 'https://example.com/bar.png', 'alt text', 'has title' ],
			[ '/baz.jpg?width=100', 'has "quotes"', 'booo' ],
		];
	}

}
