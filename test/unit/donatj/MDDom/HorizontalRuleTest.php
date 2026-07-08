<?php

namespace donatj\MDDom;

class HorizontalRuleTest extends \AbstractMarkdownParsingTestCase {

	public function test_exportMarkdown_standalone(): void {
		$hr = new HorizontalRule;
		$this->assertSame("\n\n---", $hr->exportMarkdown());
	}

	public function test_exportMarkdown_withinDocument(): void {
		$doc = new Document(new HorizontalRule);
		$this->assertSame('---', $doc->exportMarkdown());
	}

	public function test_exportMarkdown_htmlOutput(): void {
		$hr = new HorizontalRule;
		$this->assertEquals(
			[
				'tag'      => 'body',
				'children' => [
					[ 'tag' => 'hr', 'children' => [] ],
				],
			],
			$this->getDocStruct($hr),
		);
	}

	public function test_exportMarkdown_betweenParagraphs(): void {
		$doc = new Document(
			new Paragraph('Before'),
			new HorizontalRule,
			new Paragraph('After'),
		);
		$this->assertSame("Before\n\n---\n\nAfter", $doc->exportMarkdown());
	}

}
