<?php
// Load XML file
$xml = new DOMDocument;
$xml->load('input_no_styles.xml');

// Load XSL file
$xsl = new DOMDocument;
$xsl->load('list.xsl');

// Configure the transformer
$proc = new XSLTProcessor;

// Attach the xsl rules
$proc->importStyleSheet($xsl);

echo "<hr/>";
echo $proc->transformToXML($xml);
echo "<hr/>";