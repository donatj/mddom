# Documentation

## Class: \donatj\MDDom\AbstractElement

### Method: AbstractElement->exportMarkdown

```php
function exportMarkdown($fragmentLevel)
```

Convert the DOM to Markdown

#### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter

#### Returns:

- ***string*** - Markdown



---

### Method: AbstractElement->getParentElement

```php
function getParentElement()
```

Get the Elements Parent or Null if Top Level

#### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

### Method: AbstractElement->getPreviousSibling

```php
function getPreviousSibling()
```

Get the Current Elements Previous Sibling

#### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

### Method: AbstractElement->getNextSibling

```php
function getNextSibling()
```

Get the Current Elements Next Sibling

#### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

## Class: \donatj\MDDom\AbstractNestingElement

### Method: AbstractNestingElement->__construct

```php
function __construct([ $child = null])
```

AbstractNestingElement constructor.

#### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

---

### Method: AbstractNestingElement->appendChild

```php
function appendChild([ $child = null])
```

Inject One Or More Elements

#### Parameters:

- ***\donatj\MDDom\AbstractElement*** | ***int*** | ***float*** | ***string*** `$child,...` - Child Elements to Append

#### Returns:

- ***$this***

---

### Method: AbstractNestingElement->removeChild

```php
function removeChild($element)
```

Remove a child element

#### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

#### Returns:

- ***bool*** - False if the given element was not found.

---

### Method: AbstractNestingElement->indexOf

```php
function indexOf($element)
```

Get the index of a child element or null if not found.

#### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

#### Returns:

- ***int*** | ***null***

---

### Method: AbstractNestingElement->childAtIndex

```php
function childAtIndex($index)
```

Gets the child element at a given index or null if not found.

#### Parameters:

- ***integer*** `$index`

#### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

### Method: AbstractNestingElement->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

Get the next sibling of a given child element or null if not found

#### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

#### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

### Method: AbstractNestingElement->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

Get the previous sibling of a given child element or null if not found

#### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

#### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

## Class: \donatj\MDDom\Anchor

Inline Anchor "a tag" Element

### Method: Anchor->__construct

```php
function __construct($href, $text [, $title = ""])
```

Anchor constructor.

#### Parameters:

- ***string*** `$href` - The link of the URL
- ***string*** `$text` - The text within the a tag
- ***string*** `$title` - Optional "hover" title value

## Class: \donatj\MDDom\Code

Inline Code Element

Example:

	`<br />`

### Method: Code->__construct

```php
function __construct($source)
```

#### Parameters:

- ***string*** `$source`

## Class: \donatj\MDDom\CodeBlock

Block Level Code Element

Example:

	```php
	echo "Hello World"
	```

### Method: CodeBlock->__construct

```php
function __construct($source [, $language = null])
```

CodeBlock constructor.

#### Parameters:

- ***string*** `$source` - Source code
- ***string*** | ***null*** `$language` - Optional language name, e.g. php, js, ruby etc

## Class: \donatj\MDDom\Document

Document Root

## Class: \donatj\MDDom\DocumentDepth

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

## Class: \donatj\MDDom\Emphasis

Inline Emphasis Element

Example:

	*italic*

## Class: \donatj\MDDom\Header

Header "H{n}" Element

The {n} of the generated H element is determined by it's nesting depth within DocumentDepth's

Example:

	### H3 Element

## Class: \donatj\MDDom\HorizontalRule

Block Level Horizontal Rule Element

Example:

	---

## Class: \donatj\MDDom\Image

Image Element

### Method: Image->__construct

```php
function __construct($src, $alt [, $title = ""])
```

Image constructor.

#### Parameters:

- ***string*** `$src` - URL of given image
- ***string*** `$alt` - Alt Text for Accessibility
- ***string*** `$title` - Optional "hover" title value

## Class: \donatj\MDDom\Interfaces\BlockElementInterface

## Class: \donatj\MDDom\Paragraph

Paragraph Element

## Class: \donatj\MDDom\Strong

Strong Element

Example:

	**bold**

## Class: \donatj\MDDom\Text

Markdown Raw Text Element

### Method: Text->__construct

```php
function __construct($text)
```

#### Parameters:

- ***string*** `$text`