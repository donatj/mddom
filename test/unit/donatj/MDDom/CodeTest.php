<?php

namespace donatj\MDDom;

class CodeTest extends \AbstractMarkdownParsingTestCase {

	/**
	 * @dataProvider backtickNumbersProvider
	 */
	public function test_exportMarkdown_BacktickNumbers( string $input, string $expected ) : void {
		$code = new Code($input);

		$this->assertEquals($expected, $code->exportMarkdown());
	}

	public function backtickNumbersProvider() : \Generator {
		yield 'no backticks' => [ 'foo', '`foo`' ];
		yield 'mixed backtick lengths' => [ 'f`o```o`aasdasd`a`a``a', '````f`o```o`aasdasd`a`a``a````' ];
		yield 'multiline with backticks' => [ "a\n```b\n````````\n\nc", "`````````a\n```b\n````````\n\nc`````````" ];
	}

}
