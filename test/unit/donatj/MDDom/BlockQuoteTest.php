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

	public function test_exportMarkdown_unixNewlines() : void {
		$doc = new Document(
			new BlockQuote(
				new Text("Line one\nLine two")
			)
		);

		$this->assertSame("> Line one\n> Line two", $doc->exportMarkdown());
	}

	public function test_exportMarkdown_windowsNewlines() : void {
		$doc = new Document(
			new BlockQuote(
				new Text("Line one\r\nLine two")
			)
		);

		$this->assertSame("> Line one\n> Line two", $doc->exportMarkdown());
	}

	public function test_exportMarkdown_headers_defaultFragmentLevel() : void {
		$doc = new Document(
			new DocumentDepth(
				new BlockQuote(
					new Header('First'),
					new DocumentDepth(
						new Header('Second')
					)
				)
			)
		);

		$this->assertSame("> # First\n> \n> ## Second", $doc->exportMarkdown());
	}

	public function test_exportMarkdown_headers_withCurrentFragmentLevelConstructor() : void {
		$doc = new Document(
			new DocumentDepth(
				new BlockQuote(
					true,
					new Header('First'),
					new DocumentDepth(
						new Header('Second')
					)
				)
			)
		);

		$this->assertSame("> ## First\n> \n> ### Second", $doc->exportMarkdown());
	}

	public function test_exportMarkdown_headers_withCustomFragmentLevelConstructor() : void {
		$doc = new Document(
			new DocumentDepth(
				new BlockQuote(
					3,
					new Header('First'),
					new DocumentDepth(
						new Header('Second')
					)
				)
			)
		);

		$this->assertSame("> #### First\n> \n> ##### Second", $doc->exportMarkdown());
	}

}
