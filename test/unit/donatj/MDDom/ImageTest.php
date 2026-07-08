<?php

namespace donatj\MDDom;

class ImageTest extends \AbstractMarkdownParsingTestCase {

	/**
	 * @dataProvider imageMarkdownProvider
	 */
	public function test_exportMarkdown( string $src, string $alt, string $title, string $expected ) : void {
		$img = new Image($src, $alt, $title);
		$this->assertSame($expected, $img->exportMarkdown());
	}

	public function imageMarkdownProvider() : \Generator {
		yield 'without title' => [ 'https://example.com/img.png', 'alt text', '', '![alt text](https://example.com/img.png)' ];
		yield 'with title' => [ 'https://example.com/img.png', 'alt text', 'hover title', '![alt text](https://example.com/img.png "hover title")' ];
		yield 'relative path' => [ '/images/photo.jpg', 'a photo', '', '![a photo](/images/photo.jpg)' ];
	}

	/**
	 * @dataProvider imageHtmlProvider
	 */
	public function test_exportMarkdown_htmlOutput( string $url, string $alt, string $title ) : void {
		$img = new Image($url, $alt, $title);

		$elm = $this->domFromDoc($img);
		$img = $elm->getElementsByTagName('img')->item(0);

		$expected = [
			'tag'        => 'img',
			'children'   => [],
			'attributes' => [
				'src' => $url,
				'alt' => $alt,
			],
		];

		if( $title !== '' ) {
			$expected['attributes']['title'] = $title;
		}

		$this->assertEquals($expected, $this->getDomElementStruct($img));
	}

	public function imageHtmlProvider() : \Generator {
		yield 'without title' => [ 'http://example.com/foo.png', 'alt text', '' ];
		yield 'with title' => [ 'https://example.com/bar.png', 'alt text', 'has title' ];
		yield 'url with query params and quoted text' => [ '/baz.jpg?width=100', 'has "quotes"', 'booo' ];
	}

}
