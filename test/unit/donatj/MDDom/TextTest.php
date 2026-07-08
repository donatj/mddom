<?php

namespace donatj\MDDom;

class TextTest extends \PHPUnit\Framework\TestCase {

	/**
	 * @dataProvider exportMarkdownProvider
	 */
	public function test_exportMarkdown( string $input, string $expected ) : void {
		$text = new Text($input);
		$this->assertSame($expected, $text->exportMarkdown());
	}

	public static function exportMarkdownProvider() : \Generator {
		yield 'plain text is passed through unchanged' => [ 'Hello World', 'Hello World' ];
		yield 'empty string' => [ '', '' ];
		yield 'markdown characters are preserved verbatim' => [ '**bold** and *italic*', '**bold** and *italic*' ];
		yield 'newlines are preserved' => [ "line one\nline two", "line one\nline two" ];
	}

}
