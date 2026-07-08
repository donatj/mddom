<?php

namespace donatj\MDDom;

class DocumentTest extends \PHPUnit\Framework\TestCase {

	public function test_exportMarkdown_trimsLeadingAndTrailingWhitespace(): void {
		$doc = new Document(
			new HorizontalRule,
			new Text("tail\n\n"),
		);
		$this->assertSame("---\n\ntail", $doc->exportMarkdown());
	}

	public function test_exportMarkdown_multipleBlockChildren(): void {
		$doc = new Document(
			new Paragraph('First'),
			new Paragraph('Second'),
			new Paragraph('Third'),
		);
		$this->assertSame("First\n\nSecond\n\nThird", $doc->exportMarkdown());
	}

	public function test_exportMarkdown_inlineContent(): void {
		$doc = new Document(new Text('Hello'));
		$this->assertSame('Hello', $doc->exportMarkdown());
	}

	public function test_exportMarkdown_emptyDocument(): void {
		$doc = new Document;
		$this->assertSame('', $doc->exportMarkdown());
	}

	public function test_appendChild_returnsThis_forChaining(): void {
		$doc    = new Document;
		$result = $doc->appendChild(new Text('hello'));
		$this->assertSame($doc, $result);
	}

	public function test_appendChild_acceptsScalarValues(): void {
		$doc = new Document;
		$doc->appendChild('scalar text');
		$this->assertSame('scalar text', $doc->exportMarkdown());
	}

}
