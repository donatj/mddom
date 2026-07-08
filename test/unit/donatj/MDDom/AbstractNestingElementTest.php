<?php

namespace donatj\MDDom;

class AbstractNestingElementTest extends \PHPUnit\Framework\TestCase {

	public function test_removeChild_returnsTrue_andRemovesChild(): void {
		$doc   = new Document;
		$child = new Text('hello');
		$doc->appendChild($child);

		$this->assertTrue($doc->removeChild($child));
		$this->assertNull($doc->childAtIndex(0));
	}

	public function test_removeChild_returnsFalse_whenChildNotFound(): void {
		$doc   = new Document;
		$child = new Text('hello');

		$this->assertFalse($doc->removeChild($child));
	}

	public function test_removeChild_reindexesRemainingChildren(): void {
		$doc   = new Document;
		$first = new Text('first');
		$second = new Text('second');
		$third = new Text('third');
		$doc->appendChild($first, $second, $third);

		$doc->removeChild($second);

		$this->assertSame(0, $doc->indexOf($first));
		$this->assertSame(1, $doc->indexOf($third));
		$this->assertNull($doc->childAtIndex(2));
	}

	public function test_indexOf_returnsIndex_whenChildFound(): void {
		$doc    = new Document;
		$first  = new Text('first');
		$second = new Text('second');
		$doc->appendChild($first, $second);

		$this->assertSame(0, $doc->indexOf($first));
		$this->assertSame(1, $doc->indexOf($second));
	}

	public function test_indexOf_returnsNull_whenChildNotFound(): void {
		$doc   = new Document;
		$child = new Text('hello');

		$this->assertNull($doc->indexOf($child));
	}

	public function test_childAtIndex_returnsElement(): void {
		$doc   = new Document;
		$child = new Text('hello');
		$doc->appendChild($child);

		$this->assertSame($child, $doc->childAtIndex(0));
	}

	public function test_childAtIndex_returnsNull_forOutOfBoundsIndex(): void {
		$doc = new Document;

		$this->assertNull($doc->childAtIndex(0));
		$this->assertNull($doc->childAtIndex(99));
	}

	public function test_getNextSiblingOf_returnsNextSibling(): void {
		$doc    = new Document;
		$first  = new Text('first');
		$second = new Text('second');
		$doc->appendChild($first, $second);

		$this->assertSame($second, $doc->getNextSiblingOf($first));
		$this->assertNull($doc->getNextSiblingOf($second));
	}

	public function test_getNextSiblingOf_returnsNull_whenChildNotFound(): void {
		$doc     = new Document;
		$first   = new Text('first');
		$second  = new Text('second');
		$outside = new Text('outside');
		$doc->appendChild($first, $second);

		$this->assertNull($doc->getNextSiblingOf($outside));
	}

	public function test_getPreviousSiblingOf_returnsPreviousSibling(): void {
		$doc    = new Document;
		$first  = new Text('first');
		$second = new Text('second');
		$doc->appendChild($first, $second);

		$this->assertSame($first, $doc->getPreviousSiblingOf($second));
		$this->assertNull($doc->getPreviousSiblingOf($first));
	}

	public function test_appendChild_withScalar_wrapsInText(): void {
		$doc = new Document;
		$doc->appendChild('hello');

		$this->assertInstanceOf(Text::class, $doc->childAtIndex(0));
	}

	public function test_appendChild_withInvalidType_throwsInvalidArgumentException(): void {
		$doc = new Document;
		$this->expectException(\InvalidArgumentException::class);
		/** @phpstan-ignore-next-line */
		$doc->appendChild(new \stdClass);
	}

	public function test_getParentElement_returnsParent_afterAppend(): void {
		$doc   = new Document;
		$child = new Text('hello');
		$doc->appendChild($child);

		$this->assertSame($doc, $child->getParentElement());
	}

	public function test_getParentElement_returnsNull_whenNoParent(): void {
		$child = new Text('hello');

		$this->assertNull($child->getParentElement());
	}

	public function test_getPreviousSibling_returnsNull_whenNoParent(): void {
		$child = new Text('hello');

		$this->assertNull($child->getPreviousSibling());
	}

	public function test_getNextSibling_returnsNull_whenNoParent(): void {
		$child = new Text('hello');

		$this->assertNull($child->getNextSibling());
	}

	public function test_getPreviousSibling_andGetNextSibling_returnCorrectSiblings(): void {
		$doc    = new Document;
		$first  = new Text('first');
		$second = new Text('second');
		$third  = new Text('third');
		$doc->appendChild($first, $second, $third);

		$this->assertNull($first->getPreviousSibling());
		$this->assertSame($second, $first->getNextSibling());

		$this->assertSame($first, $second->getPreviousSibling());
		$this->assertSame($third, $second->getNextSibling());

		$this->assertSame($second, $third->getPreviousSibling());
		$this->assertNull($third->getNextSibling());
	}

}
