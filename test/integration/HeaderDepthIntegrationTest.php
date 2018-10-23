<?php

use donatj\MDDom;

class HeaderDepthIntegrationTest extends AbstractMarkdownParsingTestCase {

	public function testHeaderDepth() {
		$doc = new MDDom\Document(
			new MDDom\Header("String 1"),
			new MDDom\DocumentDepth(
				new MDDom\Header("String 2"),
				new MDDom\DocumentDepth(
					new MDDom\Header("String 3"),
					new MDDom\DocumentDepth(
						new MDDom\Header("String 4"),
						new MDDom\DocumentDepth(
							new MDDom\Header("String 5"),
							new MDDom\DocumentDepth(
								new MDDom\Header("String 6"),
								new MDDom\DocumentDepth(
									new MDDom\Header("String 7"),
									new MDDom\DocumentDepth(
										new MDDom\Header("String 8")
									)
								)
							)
						)
					)
				)
			)
		);

		$expected = [
			'tag'      => 'html',
			'children' => [
				[ 'tag' => 'h1', 'children' => [ 'String 1' ] ],
				[ 'tag' => 'h2', 'children' => [ 'String 2' ] ],
				[ 'tag' => 'h3', 'children' => [ 'String 3' ] ],
				[ 'tag' => 'h4', 'children' => [ 'String 4' ] ],
				[ 'tag' => 'h5', 'children' => [ 'String 5' ] ],
				[ 'tag' => 'h6', 'children' => [ 'String 6', ] ],
				[ 'tag' => 'h6', 'children' => [ '+ String 7' ] ],
				[ 'tag' => 'h6', 'children' => [ '++ String 8' ] ],
			],
		];

		$this->assertEquals($expected, $this->getDocStruct($doc));
	}

}
