<?php
$html = file_get_contents("https://www.espiritosanto-es.com.br/");
$dom=new DOMDocument();


libxml_use_internal_errors(true);
$dom->loadHTML($html);
echo $dom->saveHTML();
?>
