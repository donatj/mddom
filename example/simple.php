<?php

use donatj\MDDom;

require __DIR__ . '/../vendor/autoload.php';

$doc = new MDDom\Document;

$doc->appendChild(new MDDom\Header("Hello World!"));
$doc->appendChild(new MDDom\Paragraph("This text is in a paragraph"));
$doc->appendChild(new MDDom\Paragraph("This text is in a separate paragraph"));

$sub = new MDDom\DocumentDepth;
$doc->appendChild($sub);

// Header Level, e.g. <h2> is determined by the depth.
$sub->appendChild(new MDDom\Header("Sub-Header!"));
$sub->appendChild(new MDDom\CodeBlock("echo 'Hello World';", 'php'));

echo $doc->exportMarkdown();
