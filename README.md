# MDDom - Markdown DOM

A Simple Easy To Use Markdown DOM

## Documentation

### Class: AbstractElement \[ `\donatj\MDDom` \]

#### Method: `AbstractElement->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `AbstractElement->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `AbstractElement->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `AbstractElement->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: AbstractNestingElement \[ `\donatj\MDDom` \]

#### Undocumented Method: `AbstractNestingElement->__construct()`
---

#### Method: `AbstractNestingElement->appendChild()`

Inject One Or More Elements  
  


##### Returns:

- ***$this***


---

#### Method: `AbstractNestingElement->removeChild($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***bool***


---

#### Method: `AbstractNestingElement->indexOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `AbstractNestingElement->childAtIndex($index)`

##### Parameters:

- ***mixed*** `$index`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `AbstractNestingElement->getNextSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `AbstractNestingElement->getPreviousSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `AbstractNestingElement->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `AbstractNestingElement->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `AbstractNestingElement->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `AbstractNestingElement->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Anchor \[ `\donatj\MDDom` \]

#### Undocumented Method: `Anchor->__construct($href, $text [, $title = ""])`
---

#### Method: `Anchor->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `Anchor->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Anchor->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Anchor->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Code \[ `\donatj\MDDom` \]

#### Undocumented Method: `Code->__construct($source)`
---

#### Method: `Code->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `Code->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Code->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Code->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: CodeBlock \[ `\donatj\MDDom` \]

#### Undocumented Method: `CodeBlock->__construct($source [, $language = null])`
---

#### Method: `CodeBlock->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `CodeBlock->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `CodeBlock->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `CodeBlock->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: DocumentDepth \[ `\donatj\MDDom` \]

#### Undocumented Method: `DocumentDepth->__construct()`
---

#### Method: `DocumentDepth->appendChild()`

Inject One Or More Elements  
  


##### Returns:

- ***$this***


---

#### Method: `DocumentDepth->removeChild($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***bool***


---

#### Method: `DocumentDepth->indexOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `DocumentDepth->childAtIndex($index)`

##### Parameters:

- ***mixed*** `$index`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `DocumentDepth->getNextSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `DocumentDepth->getPreviousSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `DocumentDepth->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `DocumentDepth->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `DocumentDepth->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `DocumentDepth->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Emphasis \[ `\donatj\MDDom` \]

#### Undocumented Method: `Emphasis->__construct()`
---

#### Method: `Emphasis->appendChild()`

Inject One Or More Elements  
  


##### Returns:

- ***$this***


---

#### Method: `Emphasis->removeChild($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***bool***


---

#### Method: `Emphasis->indexOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Emphasis->childAtIndex($index)`

##### Parameters:

- ***mixed*** `$index`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Emphasis->getNextSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Emphasis->getPreviousSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Emphasis->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `Emphasis->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Emphasis->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Emphasis->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Header \[ `\donatj\MDDom` \]

#### Undocumented Method: `Header->__construct()`
---

#### Method: `Header->appendChild()`

Inject One Or More Elements  
  


##### Returns:

- ***$this***


---

#### Method: `Header->removeChild($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***bool***


---

#### Method: `Header->indexOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Header->childAtIndex($index)`

##### Parameters:

- ***mixed*** `$index`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Header->getNextSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Header->getPreviousSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Header->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `Header->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Header->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Header->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: HorizontalRule \[ `\donatj\MDDom` \]

#### Method: `HorizontalRule->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `HorizontalRule->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `HorizontalRule->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `HorizontalRule->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Image \[ `\donatj\MDDom` \]

#### Undocumented Method: `Image->__construct($src, $alt [, $title = ""])`
---

#### Method: `Image->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `Image->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Image->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Image->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: BlockElementInterface \[ `\donatj\MDDom\Interfaces` \]

### Class: ListOrdered \[ `\donatj\MDDom` \]

#### Undocumented Method: `ListOrdered->__construct()`
---

#### Method: `ListOrdered->appendChild()`

Inject One Or More Elements  
  


##### Returns:

- ***$this***


---

#### Method: `ListOrdered->removeChild($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***bool***


---

#### Method: `ListOrdered->indexOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListOrdered->childAtIndex($index)`

##### Parameters:

- ***mixed*** `$index`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListOrdered->getNextSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListOrdered->getPreviousSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListOrdered->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `ListOrdered->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListOrdered->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListOrdered->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: ListUnordered \[ `\donatj\MDDom` \]

#### Undocumented Method: `ListUnordered->__construct()`
---

#### Method: `ListUnordered->appendChild()`

Inject One Or More Elements  
  


##### Returns:

- ***$this***


---

#### Method: `ListUnordered->removeChild($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***bool***


---

#### Method: `ListUnordered->indexOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListUnordered->childAtIndex($index)`

##### Parameters:

- ***mixed*** `$index`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListUnordered->getNextSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListUnordered->getPreviousSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListUnordered->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `ListUnordered->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListUnordered->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListUnordered->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Paragraph \[ `\donatj\MDDom` \]

#### Undocumented Method: `Paragraph->__construct()`
---

#### Method: `Paragraph->appendChild()`

Inject One Or More Elements  
  


##### Returns:

- ***$this***


---

#### Method: `Paragraph->removeChild($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***bool***


---

#### Method: `Paragraph->indexOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Paragraph->childAtIndex($index)`

##### Parameters:

- ***mixed*** `$index`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Paragraph->getNextSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Paragraph->getPreviousSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Paragraph->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `Paragraph->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Paragraph->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Paragraph->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Strong \[ `\donatj\MDDom` \]

#### Undocumented Method: `Strong->__construct()`
---

#### Method: `Strong->appendChild()`

Inject One Or More Elements  
  


##### Returns:

- ***$this***


---

#### Method: `Strong->removeChild($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***bool***


---

#### Method: `Strong->indexOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Strong->childAtIndex($index)`

##### Parameters:

- ***mixed*** `$index`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Strong->getNextSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Strong->getPreviousSiblingOf($element)`

##### Parameters:

- ***\donatj\MDDom\AbstractElement*** `$element`


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Strong->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `Strong->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Strong->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Strong->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Text \[ `\donatj\MDDom` \]

#### Undocumented Method: `Text->__construct($text)`
---

#### Method: `Text->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - Private use - recursion depth counter


##### Returns:

- ***string*** - Markdown


---

#### Method: `Text->getParentElement()`

Get the Elements Parent or Null if Top Level  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Text->getPreviousSibling()`

Get the Current Elements Previous Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Text->getNextSibling()`

Get the Current Elements Next Sibling  
  


##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

