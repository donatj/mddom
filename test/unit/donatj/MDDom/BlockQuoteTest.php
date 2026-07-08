<?php

namespace donatj\MDDom;

class BlockQuoteTest extends \AbstractMarkdownParsingTestCase {

	/**
	 * @dataProvider blockQuoteHtmlProvider
	 */
	public function test_exportMarkdown_htmlOutput( BlockQuote $blockQuote, array $expected ): void {
		$this->assertEquals($expected, $this->getDocStruct($blockQuote));
	}

	public static function blockQuoteHtmlProvider(): \Generator {
		yield 'single paragraph' => [
			new BlockQuote(
				0,
				new Paragraph('Hello World'),
			),
			[
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
			],
		];

		yield 'multiple paragraphs' => [
			new BlockQuote(
				0,
				new Paragraph('Line one'),
				new Paragraph('Line two'),
			),
			[
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
			],
		];
	}

	/**
	 * @dataProvider newlineNormalizationProvider
	 */
	public function test_exportMarkdown_normalizesNewlines( string $text, string $expected ): void {
		$doc = new Document(
			new BlockQuote(0, new Text($text)),
		);
		$this->assertSame($expected, $doc->exportMarkdown());
	}

	public static function newlineNormalizationProvider(): \Generator {
		yield 'unix newlines' => [ "Line one\nLine two", "> Line one\n> Line two" ];
		yield 'windows newlines' => [ "Line one\r\nLine two", "> Line one\n> Line two" ];
	}

	/**
	 * @dataProvider headerFragmentLevelProvider
	 */
	public function test_exportMarkdown_headerFragmentLevel( ?int $fragmentLevel, string $expected ): void {
		$doc = new Document(
			new DocumentDepth(
				new BlockQuote(
					$fragmentLevel,
					new Header('First'),
					new DocumentDepth(
						new Header('Second'),
					),
				),
			),
		);
		$this->assertSame($expected, $doc->exportMarkdown());
	}

	public static function headerFragmentLevelProvider(): \Generator {
		yield 'reset to top level' => [ 0, "> # First\n> \n> ## Second" ];
		yield 'inherits current level' => [ null, "> ## First\n> \n> ### Second" ];
		yield 'explicit level 3' => [ 3, "> #### First\n> \n> ##### Second" ];
	}

}
