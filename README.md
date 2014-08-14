# MDDom - Markdown DOM

A Simple Easy To Use Markdown DOM

## Documentation

### Class: AbstractElement \[ `\donatj\MDDom` \]

#### Method: `AbstractElement->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***


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

### Class: Anchor \[ `\donatj\MDDom` \]

#### Undocumented Method: `Anchor->__construct($href, $text [, $title = ""])`
---

#### Method: `Anchor->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***

### Class: Code \[ `\donatj\MDDom` \]

#### Undocumented Method: `Code->__construct($source)`
---

#### Method: `Code->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***

### Class: CodeBlock \[ `\donatj\MDDom` \]

#### Undocumented Method: `CodeBlock->__construct($source [, $language = null])`
---

#### Method: `CodeBlock->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***

### Class: DocumentDepth \[ `\donatj\MDDom` \]

#### Undocumented Method: `DocumentDepth->exportMarkdown($fragmentLevel)`

### Class: Emphasis \[ `\donatj\MDDom` \]

#### Undocumented Method: `Emphasis->exportMarkdown($fragmentLevel)`

### Class: Header \[ `\donatj\MDDom` \]

#### Undocumented Method: `Header->exportMarkdown($fragmentLevel)`

### Class: HorizontalRule \[ `\donatj\MDDom` \]

#### Undocumented Method: `HorizontalRule->exportMarkdown($fragmentLevel)`

### Class: Image \[ `\donatj\MDDom` \]

#### Undocumented Method: `Image->__construct($src, $alt [, $title = ""])`
---

#### Method: `Image->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***

### Class: ListOrdered \[ `\donatj\MDDom` \]

### Class: ListUnordered \[ `\donatj\MDDom` \]

### Class: Paragraph \[ `\donatj\MDDom` \]

#### Undocumented Method: `Paragraph->exportMarkdown($fragmentLevel)`

### Class: Strong \[ `\donatj\MDDom` \]

#### Undocumented Method: `Strong->exportMarkdown($fragmentLevel)`

### Class: Text \[ `\donatj\MDDom` \]

#### Undocumented Method: `Text->__construct($text)`
---

#### Method: `Text->exportMarkdown($fragmentLevel)`

##### Parameters:

- ***int*** `$fragmentLevel`


##### Returns:

- ***string***

