<?php

namespace donatj\MDDom;

class CodeTest extends \AbstractMarkdownParsingTestCase {

	/**
	 * @dataProvider backtickNumbersProvider
	 *
	 * @param string $input
	 * @param string $expected
	 */
	public function test_exportMarkdown_BacktickNumbers( $input, $expected ) {
		$code = new Code($input);

		$this->assertEquals($expected, $code->exportMarkdown());
	}

	public function backtickNumbersProvider() {
		return [
			[ 'foo', '`foo`' ],
			[ 'f`o```o`aasdasd`a`a``a', '````f`o```o`aasdasd`a`a``a````' ],
			[ "a\n```b\n````````\n\nc", "`````````a\n```b\n````````\n\nc`````````" ],
		];
	}

}
