# MDDom - Markdown DOM

A Simple Easy To Use Markdown DOM

## Documentation

### Class: \donatj\MDDom\Document

Document Root

#### Method: Document->__construct

```php
function __construct([ $child = null])
```

AbstractNestingElement constructor.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

---

#### Method: Document->appendChild

```php
function appendChild([ $child = null])
```

Inject One Or More Elements

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

##### Returns:

- ***$this***

---

#### Method: Document->removeChild

```php
function removeChild($element)
```

Remove a child element

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool*** - False if the given element was not found.

---

#### Method: Document->indexOf

```php
function indexOf($element)
```

Get the index of a child element or null if not found.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***int*** | ***null***

---

#### Method: Document->childAtIndex

```php
function childAtIndex($index)
```

Gets the child element at a given index or null if not found.

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Document->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

Get the next sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Document->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

Get the previous sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Document->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: Document->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Document->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Document->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\Code

Inline Code Element

Example:

	`<br />`

#### Method: Code->__construct

```php
function __construct($source)
```

##### Parameters:

- ***string*** `$source`

---

#### Method: Code->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: Code->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Code->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Code->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\Paragraph

Paragraph Element

#### Method: Paragraph->__construct

```php
function __construct([ $child = null])
```

AbstractNestingElement constructor.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

---

#### Method: Paragraph->appendChild

```php
function appendChild([ $child = null])
```

Inject One Or More Elements

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

##### Returns:

- ***$this***

---

#### Method: Paragraph->removeChild

```php
function removeChild($element)
```

Remove a child element

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool*** - False if the given element was not found.

---

#### Method: Paragraph->indexOf

```php
function indexOf($element)
```

Get the index of a child element or null if not found.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***int*** | ***null***

---

#### Method: Paragraph->childAtIndex

```php
function childAtIndex($index)
```

Gets the child element at a given index or null if not found.

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Paragraph->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

Get the next sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Paragraph->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

Get the previous sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Paragraph->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: Paragraph->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Paragraph->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Paragraph->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\AbstractElement

#### Method: AbstractElement->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: AbstractElement->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: AbstractElement->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: AbstractElement->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\AbstractNestingElement

#### Method: AbstractNestingElement->__construct

```php
function __construct([ $child = null])
```

AbstractNestingElement constructor.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

---

#### Method: AbstractNestingElement->appendChild

```php
function appendChild([ $child = null])
```

Inject One Or More Elements

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

##### Returns:

- ***$this***

---

#### Method: AbstractNestingElement->removeChild

```php
function removeChild($element)
```

Remove a child element

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool*** - False if the given element was not found.

---

#### Method: AbstractNestingElement->indexOf

```php
function indexOf($element)
```

Get the index of a child element or null if not found.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***int*** | ***null***

---

#### Method: AbstractNestingElement->childAtIndex

```php
function childAtIndex($index)
```

Gets the child element at a given index or null if not found.

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: AbstractNestingElement->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

Get the next sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: AbstractNestingElement->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

Get the previous sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: AbstractNestingElement->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: AbstractNestingElement->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: AbstractNestingElement->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: AbstractNestingElement->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\Strong

Strong Element

Example:

	**bold**

#### Method: Strong->__construct

```php
function __construct([ $child = null])
```

AbstractNestingElement constructor.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

---

#### Method: Strong->appendChild

```php
function appendChild([ $child = null])
```

Inject One Or More Elements

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

##### Returns:

- ***$this***

---

#### Method: Strong->removeChild

```php
function removeChild($element)
```

Remove a child element

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool*** - False if the given element was not found.

---

#### Method: Strong->indexOf

```php
function indexOf($element)
```

Get the index of a child element or null if not found.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***int*** | ***null***

---

#### Method: Strong->childAtIndex

```php
function childAtIndex($index)
```

Gets the child element at a given index or null if not found.

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Strong->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

Get the next sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Strong->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

Get the previous sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Strong->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: Strong->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Strong->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Strong->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\Header

Header "H{n}" Element

The {n} of the generated H element is determined by it's nesting depth within DocumentDepth's

Example:

	### H3 Element

#### Method: Header->__construct

```php
function __construct([ $child = null])
```

AbstractNestingElement constructor.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

---

#### Method: Header->appendChild

```php
function appendChild([ $child = null])
```

Inject One Or More Elements

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

##### Returns:

- ***$this***

---

#### Method: Header->removeChild

```php
function removeChild($element)
```

Remove a child element

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool*** - False if the given element was not found.

---

#### Method: Header->indexOf

```php
function indexOf($element)
```

Get the index of a child element or null if not found.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***int*** | ***null***

---

#### Method: Header->childAtIndex

```php
function childAtIndex($index)
```

Gets the child element at a given index or null if not found.

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Header->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

Get the next sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Header->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

Get the previous sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Header->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: Header->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Header->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Header->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\Emphasis

Inline Emphasis Element

Example:

	*italic*

#### Method: Emphasis->__construct

```php
function __construct([ $child = null])
```

AbstractNestingElement constructor.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

---

#### Method: Emphasis->appendChild

```php
function appendChild([ $child = null])
```

Inject One Or More Elements

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

##### Returns:

- ***$this***

---

#### Method: Emphasis->removeChild

```php
function removeChild($element)
```

Remove a child element

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool*** - False if the given element was not found.

---

#### Method: Emphasis->indexOf

```php
function indexOf($element)
```

Get the index of a child element or null if not found.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***int*** | ***null***

---

#### Method: Emphasis->childAtIndex

```php
function childAtIndex($index)
```

Gets the child element at a given index or null if not found.

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Emphasis->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

Get the next sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Emphasis->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

Get the previous sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Emphasis->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: Emphasis->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Emphasis->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Emphasis->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\Anchor

Inline Anchor "a tag" Element

#### Method: Anchor->__construct

```php
function __construct($href, $text [, $title = ""])
```

Anchor constructor.

##### Parameters:

- ***string*** `$href` - The link of the URL
- ***string*** `$text` - The text within the a tag
- ***string*** `$title` - Optional "hover" title value

---

#### Method: Anchor->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: Anchor->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Anchor->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Anchor->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\DocumentDepth

DocumentDepth

An illusory element used for structuring your document into smaller parts.

The H level of the `Header` is determined by it's depth within the document.

For example:

```php
$doc = new \donatj\MDDom\Document;
$doc->appendChild(
	new \donatj\MDDom\Header('Level 1')
)->appendChild(
	(new \donatj\MDDom\DocumentDepth)->appendChild(
		new \donatj\MDDom\Header('Level 2')
	)
);
echo $doc->exportMarkdown();
```

outputs:

```
# Level 1

## Level 2
```

#### Method: DocumentDepth->__construct

```php
function __construct([ $child = null])
```

AbstractNestingElement constructor.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

---

#### Method: DocumentDepth->appendChild

```php
function appendChild([ $child = null])
```

Inject One Or More Elements

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

##### Returns:

- ***$this***

---

#### Method: DocumentDepth->removeChild

```php
function removeChild($element)
```

Remove a child element

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool*** - False if the given element was not found.

---

#### Method: DocumentDepth->indexOf

```php
function indexOf($element)
```

Get the index of a child element or null if not found.

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***int*** | ***null***

---

#### Method: DocumentDepth->childAtIndex

```php
function childAtIndex($index)
```

Gets the child element at a given index or null if not found.

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: DocumentDepth->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

Get the next sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: DocumentDepth->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

Get the previous sibling of a given child element or null if not found

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: DocumentDepth->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: DocumentDepth->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: DocumentDepth->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: DocumentDepth->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\HorizontalRule

Block Level Horizontal Rule Element

Example:

	---

#### Method: HorizontalRule->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: HorizontalRule->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: HorizontalRule->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: HorizontalRule->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\CodeBlock

Block Level Code Element

Example:

	```php
	echo "Hello World"
	```

#### Method: CodeBlock->__construct

```php
function __construct($source [, $language = null])
```

CodeBlock constructor.

##### Parameters:

- ***string*** `$source` - Source code
- ***string*** | ***null*** `$language` - Optional language name, e.g. php, js, ruby etc

---

#### Method: CodeBlock->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: CodeBlock->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: CodeBlock->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: CodeBlock->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\Text

Markdown Raw Text Element

#### Method: Text->__construct

```php
function __construct($text)
```

##### Parameters:

- ***string*** `$text`

---

#### Method: Text->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: Text->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Text->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Text->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\Image

Image Element

#### Method: Image->__construct

```php
function __construct($src, $alt [, $title = ""])
```

Image constructor.

##### Parameters:

- ***string*** `$src` - URL of given image
- ***string*** `$alt` - Alt Text for Accessibility
- ***string*** `$title` - Optional "hover" title value

---

#### Method: Image->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

##### Returns:

- ***string*** - Markdown



---

#### Method: Image->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Image->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Image->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: \donatj\MDDom\Interfaces\BlockElementInterface