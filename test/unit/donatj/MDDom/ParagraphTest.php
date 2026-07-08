<?php

namespace donatj\MDDom;

class ParagraphTest extends \AbstractMarkdownParsingTestCase {

	public function test_exportMarkdown_singleParagraph() : void {
		$doc = new Document(new Paragraph('Hello World'));
		$this->assertSame('Hello World', $doc->exportMarkdown());
	}

	public function test_exportMarkdown_multipleParagraphsSeparatedByBlankLine() : void {
		$doc = new Document(
			new Paragraph('First'),
			new Paragraph('Second')
		);
		$this->assertSame("First\n\nSecond", $doc->exportMarkdown());
	}

	public function test_exportMarkdown_htmlOutput() : void {
		$doc = new Document(new Paragraph('Hello World'));
		$this->assertEquals(
			[
				'tag'      => 'body',
				'children' => [
					[
						'tag'      => 'p',
						'children' => [ 'Hello World' ],
					],
				],
			],
			$this->getDocStruct($doc)
		);
	}

	public function test_exportMarkdown_withInlineChildren() : void {
		$para = new Paragraph(
			new Strong(new Text('bold')),
			new Text(' and '),
			new Emphasis(new Text('italic'))
		);
		$doc = new Document($para);
		$this->assertSame('**bold** and *italic*', $doc->exportMarkdown());
	}

}
