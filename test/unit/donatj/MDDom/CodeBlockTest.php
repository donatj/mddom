<?php

namespace donatj\MDDom;

class CodeBlockTest extends \AbstractMarkdownParsingTestCase {

	/**
	 * @dataProvider codeBlockGenerationProvider
	 *
	 * @param string $source
	 * @param string $lang
	 * @param string $expcted
	 */
	public function test_codeBlock_generation( $source, $lang, $expcted ) {
		$code = new CodeBlock($source, $lang);

		$this->assertSame($expcted, $code->exportMarkdown());
	}

	public function codeBlockGenerationProvider() {
		return [
			[ "foo", "", <<<MD
\n\n```
foo
```
MD
				,
			],
			[ "a\n```\ncode block in code block\n```\nand some more text", "", <<<MD
\n\n````
a
```
code block in code block
```
and some more text
````
MD
				,
			],
		];
	}

}
