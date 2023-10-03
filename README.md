# MDDom - Markdown DOM

[![Latest Stable Version](https://poser.pugx.org/donatj/mddom/version)](https://packagist.org/packages/donatj/mddom)
[![License](https://poser.pugx.org/donatj/mddom/license)](https://packagist.org/packages/donatj/mddom)
[![ci.yml](https://github.com/donatj/mddom/actions/workflows/ci.yml/badge.svg?)](https://github.com/donatj/mddom/actions/workflows/ci.yml)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/donatj/mddom/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/donatj/mddom)
[![Code Coverage](https://scrutinizer-ci.com/g/donatj/mddom/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/donatj/mddom)


A Simple Easy To Use Way to Generate Markdown Using a "DOM" Like Interface

[See: docs/docs.md](docs/docs.md)



## Requirements

- **php**: >=7.2

## Installing

Install the latest version with:

```bash
composer require 'donatj/mddom'
```

## Example

```php
<?php

use donatj\MDDom;

require __DIR__ . '/../vendor/autoload.php';

$doc = new MDDom\Document();

$doc->appendChild(new MDDom\Header("Hello World!"));
$doc->appendChild(new MDDom\Paragraph("This text is in a paragraph"));
$doc->appendChild(new MDDom\Paragraph("This text is in a separate paragraph"));

$sub = new MDDom\DocumentDepth();
$doc->appendChild($sub);

// Header Level, e.g. <h2> is determined by the depth.
$sub->appendChild(new MDDom\Header("Sub-Header!"));
$sub->appendChild(new MDDom\CodeBlock("echo 'Hello World';", 'php'));

echo $doc->exportMarkdown();

```

Outputs:

````markdown
# Hello World!

This text is in a paragraph

This text is in a separate paragraph

## Sub-Header!

```php
echo 'Hello World';
```
````