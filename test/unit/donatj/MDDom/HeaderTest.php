<?php

namespace donatj\MDDom;

class HeaderTest extends \PHPUnit\Framework\TestCase {

	/**
	 * @dataProvider headerLevelProvider
	 */
	public function test_exportMarkdown_levels( int $fragmentLevel, string $expected ) : void {
		$header = new Header('Heading');
		$this->assertSame($expected, $header->exportMarkdown($fragmentLevel));
	}

	public static function headerLevelProvider() : \Generator {
		yield 'h1 at depth 0' => [ 0, "\n\n# Heading" ];
		yield 'h2 at depth 1' => [ 1, "\n\n## Heading" ];
		yield 'h3 at depth 2' => [ 2, "\n\n### Heading" ];
		yield 'h4 at depth 3' => [ 3, "\n\n#### Heading" ];
		yield 'h5 at depth 4' => [ 4, "\n\n##### Heading" ];
		yield 'h6 at depth 5' => [ 5, "\n\n###### Heading" ];
		yield 'overflow at depth 6 uses plus signs' => [ 6, "\n\n######+ Heading" ];
		yield 'overflow at depth 7 uses two plus signs' => [ 7, "\n\n######++ Heading" ];
	}

	public function test_exportMarkdown_withinDocument() : void {
		$doc = new Document(new Header('Title'));
		$this->assertSame('# Title', $doc->exportMarkdown());
	}

	public function test_exportMarkdown_withInlineChildren() : void {
		$header = new Header(
			new Strong(new Text('Bold')),
			new Text(' Title')
		);
		$doc = new Document($header);
		$this->assertSame('# **Bold** Title', $doc->exportMarkdown());
	}

}
