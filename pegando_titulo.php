<?php
$dom=new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML(file_get_contents("https://www.espiritosanto-es.com.br/"));

libxml_clear_errors(true);
$title=$dom->getElementsByTagName("title")->item(0)->textContent;
echo $title;
?>
