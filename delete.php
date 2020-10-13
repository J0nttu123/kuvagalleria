<?php

//Load XML from file (or it could come from a POST, etc.)
$xml = simplexml_load_file('data/galleria.xml');

//Use XPath to find target node for removal
$target = $xml->xpath("//picture");

//If target does not exist (already deleted by someone/thing else), halt
if(!$target)
return; //Returns null

//Import simpleXml reference into Dom & do removal (removal occurs in simpleXML object)
$domRef = dom_import_simplexml($target[0]); //Select position 0 in XPath array
$domRef->parentNode->removeChild($domRef);

//Format XML to save indented tree rather than one line and save
$dom = new DOMDocument('1.0');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save('data/galleria.xml');

header('Location: admin.php');
?>
