<?php

namespace donatj\MDDom;

class ImageTest extends \AbstractMarkdownParsingTestCase {

	/**
	 * @dataProvider imageGenerationProvider
	 *
	 * @param string $url
	 * @param string $alt
	 * @param string $title
	 */
	public function test_ImageGeneration($url, $alt, $title) {
		$img = new Image($url, $alt, $title);

		$elm = $this->domFromDoc($img);
		$img = $elm->getElementsByTagName('img')[0];

		$expected = [
			'tag'        => 'img',
			'children'   => [],
			'attributes' => [
				'src' => $url,
				'alt' => $alt,
			],
		];

		if($title !== '') {
			$expected['attributes']['title'] = $title;
		}

		$this->assertEquals(
			$expected,
			$this->getDomElementStruct($img)
		);
	}

	public function imageGenerationProvider(){
		return [
			[ 'http://example.com/foo.png', 'alt text', '' ],
			[ 'https://example.com/bar.png', 'alt text', 'has title' ],
			[ '/baz.jpg?width=100', 'has "quotes"', 'booo' ],
		];
	}

}
