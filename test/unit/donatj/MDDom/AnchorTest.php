<?php

namespace donatj\MDDom;

class AnchorTest extends \AbstractMarkdownParsingTestCase {

	/**
	 * @dataProvider anchorMarkdownProvider
	 */
	public function test_exportMarkdown( string $href, string $text, string $title, string $expected ): void {
		$a = new Anchor($href, $text, $title);
		$this->assertSame($expected, $a->exportMarkdown());
	}

	public static function anchorMarkdownProvider(): \Generator {
		yield 'without title' => [ 'https://example.com', 'link text', '', '[link text](https://example.com)' ];
		yield 'with title' => [ 'https://example.com', 'link text', 'hover title', '[link text](https://example.com "hover title")' ];
		yield 'url with query string' => [ '/path?q=1&r=2', 'click here', '', '[click here](/path?q=1&r=2)' ];
	}

	/**
	 * @dataProvider anchorHtmlProvider
	 */
	public function test_exportMarkdown_htmlOutput( string $href, string $text, string $title ): void {
		$a = new Anchor($href, $text, $title);

		$elm = $this->domFromDoc($a);
		$a   = $elm->getElementsByTagName('a')->item(0);

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

		$this->assertEquals($expected, $this->getDomElementStruct($a));
	}

	public static function anchorHtmlProvider(): \Generator {
		yield 'without title' => [ 'http://example.com', 'link text', '' ];
		yield 'with title' => [ 'https://example.com', 'link text', 'has title' ];
		yield 'url with query params and quoted text' => [ '/baz.jpg?width=100', 'has "quotes"', 'booo' ];
	}

}
