<?php
session_start()
//XML-tiedostoon tallennus
function saveDataToXML($data, $file_name){

    $author = $data['author'];
    $xml = simplexml_load_file('data/galleria.xml');

    $new_pic = $xml->addChild('picture');
    $new_pick->addChild('author', $author);
    $new_pick->addChild('file', $file_name);
    $new_pick->addChild('date', date("Y-m-d"));

    // Muotoilu ja tallennus
    $dom = new DOMDocument("1.0");
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save('data/galleria.xml');

}