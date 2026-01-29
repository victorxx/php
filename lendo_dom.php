<?php

$url = "https://www.espiritosanto-es.com.br/";

// Lê o HTML da página
$html = file_get_contents($url);

// Cria DOMDocument
$dom = new DOMDocument();
@$dom->loadHTML($html); // @ evita warnings de HTML malformado

// Pega todas as tags <a> e mostra os links
foreach ($dom->getElementsByTagName('a') as $a) {
    echo $a->getAttribute('href') . "<br>";
}
?>
