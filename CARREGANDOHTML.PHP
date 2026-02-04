<?php
$dom=new DOMDocument();
$dom->loadHTML("<p>ola mundo</p>");
echo $dom->saveHTML();
?>
