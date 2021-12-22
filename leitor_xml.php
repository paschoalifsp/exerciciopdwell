<?php
$handle = fopen('./pokemon.xml','r');
$conteudo = fread ($handle, filesize ('./pokemon.xml'));

$xml = new SimpleXMLElement($conteudo);
foreach($xml -> children() as $child){
    echo "Pokemon: " . $child->asXML()."<br>";
}
fclose ($handle);
?>