<?php

namespace donatj\MDDom;

class EmphasisTest extends \PHPUnit\Framework\TestCase {

	/**
	 * @dataProvider exportMarkdownProvider
	 */
	public function test_exportMarkdown( string $content, string $expected ) : void {
		$em = new Emphasis(new Text($content));
		$this->assertSame($expected, $em->exportMarkdown());
	}

	public static function exportMarkdownProvider() : \Generator {
		yield 'single word' => [ 'hello', '*hello*' ];
		yield 'multiple words' => [ 'hello world', '*hello world*' ];
	}

	public function test_exportMarkdown_nestedInStrong() : void {
		$strong = new Strong(new Emphasis(new Text('bold italic')));
		$this->assertSame('***bold italic***', $strong->exportMarkdown());
	}

}
