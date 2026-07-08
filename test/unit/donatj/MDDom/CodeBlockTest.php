<?php

namespace donatj\MDDom;

class CodeBlockTest extends \AbstractMarkdownParsingTestCase {

	/**
	 * @dataProvider codeBlockGenerationProvider
	 */
	public function test_codeBlock_generation( string $source, ?string $lang, string $expected ) : void {
		$code = new CodeBlock($source, $lang);

		$this->assertSame($expected, $code->exportMarkdown());
	}

	public static function codeBlockGenerationProvider() : \Generator {
		yield 'plain code block without language' => [
			"foo",
			"",
			"\n\n```\nfoo\n```",
		];
		yield 'code block containing triple backticks' => [
			"a\n```\ncode block in code block\n```\nand some more text",
			"",
			"\n\n````\na\n```\ncode block in code block\n```\nand some more text\n````",
		];
		yield 'code block with language' => [
			"echo 'hello';",
			"php",
			"\n\n```php\necho 'hello';\n```",
		];
	}

}
