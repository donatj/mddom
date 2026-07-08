<?php

namespace donatj\MDDom;

class StrongTest extends \PHPUnit\Framework\TestCase {

	/**
	 * @dataProvider exportMarkdownProvider
	 */
	public function test_exportMarkdown( string $content, string $expected ) : void {
		$strong = new Strong(new Text($content));
		$this->assertSame($expected, $strong->exportMarkdown());
	}

	public function exportMarkdownProvider() : \Generator {
		yield 'single word' => [ 'hello', '**hello**' ];
		yield 'multiple words' => [ 'hello world', '**hello world**' ];
	}

	public function test_exportMarkdown_nestedEmphasis() : void {
		$strong = new Strong(new Emphasis(new Text('bold italic')));
		$this->assertSame('***bold italic***', $strong->exportMarkdown());
	}

}
