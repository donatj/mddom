<?php

namespace donatj\MDDom;

class BlockQuoteTest extends \AbstractMarkdownParsingTestCase {

	public function test_exportMarkdown_simple() : void {
		$bq = new BlockQuote(
			new Paragraph('Hello World')
		);

		$expected = [
			'tag'      => 'body',
			'children' => [
				[
					'tag'      => 'blockquote',
					'children' => [
						[
							'tag'      => 'p',
							'children' => [ 'Hello World' ],
						],
					],
				],
			],
		];

		$this->assertEquals($expected, $this->getDocStruct($bq));
	}

	public function test_exportMarkdown_multiline() : void {
		$bq = new BlockQuote(
			new Paragraph('Line one'),
			new Paragraph('Line two')
		);

		$expected = [
			'tag'      => 'body',
			'children' => [
				[
					'tag'      => 'blockquote',
					'children' => [
						[
							'tag'      => 'p',
							'children' => [ 'Line one' ],
						],
						[
							'tag'      => 'p',
							'children' => [ 'Line two' ],
						],
					],
				],
			],
		];

		$this->assertEquals($expected, $this->getDocStruct($bq));
	}

}
