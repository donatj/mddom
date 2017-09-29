# MDDom - Markdown DOM

A Simple Easy To Use Markdown DOM

## Documentation

### Class: \donatj\MDDom\Document



#### Undocumented Method: `Document->__construct()`

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

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool***

---

#### Method: Document->indexOf

```php
function indexOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Document->childAtIndex

```php
function childAtIndex($index)
```

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Document->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Document->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

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



#### Undocumented Method: `Code->__construct($source)`

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



#### Undocumented Method: `Paragraph->__construct()`

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

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool***

---

#### Method: Paragraph->indexOf

```php
function indexOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Paragraph->childAtIndex

```php
function childAtIndex($index)
```

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Paragraph->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Paragraph->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

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



#### Undocumented Method: `AbstractNestingElement->__construct()`

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

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool***

---

#### Method: AbstractNestingElement->indexOf

```php
function indexOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: AbstractNestingElement->childAtIndex

```php
function childAtIndex($index)
```

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: AbstractNestingElement->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: AbstractNestingElement->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

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



#### Undocumented Method: `Strong->__construct()`

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

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool***

---

#### Method: Strong->indexOf

```php
function indexOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Strong->childAtIndex

```php
function childAtIndex($index)
```

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Strong->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Strong->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

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



#### Undocumented Method: `Header->__construct()`

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

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool***

---

#### Method: Header->indexOf

```php
function indexOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Header->childAtIndex

```php
function childAtIndex($index)
```

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Header->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Header->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

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



#### Undocumented Method: `Emphasis->__construct()`

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

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool***

---

#### Method: Emphasis->indexOf

```php
function indexOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Emphasis->childAtIndex

```php
function childAtIndex($index)
```

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Emphasis->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: Emphasis->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

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



#### Undocumented Method: `Anchor->__construct($href, $text [, $title = ""])`

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



#### Undocumented Method: `DocumentDepth->__construct()`

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

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***bool***

---

#### Method: DocumentDepth->indexOf

```php
function indexOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: DocumentDepth->childAtIndex

```php
function childAtIndex($index)
```

##### Parameters:

- ***integer*** `$index`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: DocumentDepth->getNextSiblingOf

```php
function getNextSiblingOf($element)
```

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

---

#### Method: DocumentDepth->getPreviousSiblingOf

```php
function getPreviousSiblingOf($element)
```

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



#### Undocumented Method: `CodeBlock->__construct($source [, $language = null])`

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



#### Undocumented Method: `Text->__construct($text)`

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



#### Undocumented Method: `Image->__construct($src, $alt [, $title = ""])`

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