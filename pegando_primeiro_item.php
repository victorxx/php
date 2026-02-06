<?php
$html = file_get_contents("https://recomendadodia23.blogspot.com/");
libxml_use_internal_errors(true);
$dom=new DOMDocument();
$dom->loadHTML($html);
$links=$dom->getElementsByTagName('a');
$primeiro=$links->item(0);
echo $primeiro->getAttribute('href');


?>
