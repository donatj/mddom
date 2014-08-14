# MDDom - Markdown DOM

A Simple Easy To Use Markdown DOM

## Documentation

### Class: AbstractElement \[ `\donatj\MDDom` \]

#### Method: `AbstractElement->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - For internal recursion use.


##### Returns:

- ***string*** - Markdown


---

#### Method: `AbstractElement->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `AbstractElement->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `AbstractElement->getNextSibling()`

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

#### Method: `AbstractNestingElement->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


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

#### Method: `AbstractNestingElement->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `AbstractNestingElement->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `AbstractNestingElement->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Anchor \[ `\donatj\MDDom` \]

#### Undocumented Method: `Anchor->__construct($href, $text [, $title = ""])`
---

#### Method: `Anchor->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


---

#### Method: `Anchor->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `Anchor->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Anchor->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Code \[ `\donatj\MDDom` \]

#### Undocumented Method: `Code->__construct($source)`
---

#### Method: `Code->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


---

#### Method: `Code->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `Code->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Code->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: CodeBlock \[ `\donatj\MDDom` \]

#### Undocumented Method: `CodeBlock->__construct($source [, $language = null])`
---

#### Method: `CodeBlock->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


---

#### Method: `CodeBlock->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `CodeBlock->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `CodeBlock->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: DocumentDepth \[ `\donatj\MDDom` \]

#### Method: `DocumentDepth->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


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

#### Method: `DocumentDepth->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `DocumentDepth->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `DocumentDepth->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Emphasis \[ `\donatj\MDDom` \]

#### Method: `Emphasis->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


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

#### Method: `Emphasis->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `Emphasis->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Emphasis->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Header \[ `\donatj\MDDom` \]

#### Method: `Header->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


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

#### Method: `Header->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `Header->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Header->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: HorizontalRule \[ `\donatj\MDDom` \]

#### Method: `HorizontalRule->exportMarkdown($fragmentLevel)`

Convert the DOM to Markdown  
  


##### Parameters:

- ***int*** `$fragmentLevel` - For internal recursion use.


##### Returns:

- ***string*** - Markdown


---

#### Method: `HorizontalRule->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `HorizontalRule->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `HorizontalRule->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Image \[ `\donatj\MDDom` \]

#### Undocumented Method: `Image->__construct($src, $alt [, $title = ""])`
---

#### Method: `Image->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


---

#### Method: `Image->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `Image->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Image->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

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

#### Method: `ListOrdered->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


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

#### Method: `ListOrdered->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `ListOrdered->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListOrdered->getNextSibling()`

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

#### Method: `ListUnordered->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


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

#### Method: `ListUnordered->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `ListUnordered->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `ListUnordered->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Paragraph \[ `\donatj\MDDom` \]

#### Method: `Paragraph->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


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

#### Method: `Paragraph->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `Paragraph->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Paragraph->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Strong \[ `\donatj\MDDom` \]

#### Method: `Strong->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


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

#### Method: `Strong->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `Strong->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Strong->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

### Class: Text \[ `\donatj\MDDom` \]

#### Undocumented Method: `Text->__construct($text)`
---

#### Method: `Text->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


---

#### Method: `Text->getParentElement()`

##### Returns:

- ***null***


---

#### Method: `Text->getPreviousSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***


---

#### Method: `Text->getNextSibling()`

##### Returns:

- ***\donatj\MDDom\AbstractElement*** | ***null***

