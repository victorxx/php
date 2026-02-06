<?php
$html = file_get_contents("https://recomendadodia23.blogspot.com/");

libxml_use_internal_errors(true);

$dom = new DOMDocument();
$dom->loadHTML($html);

$xpath = new DOMXPath($dom);

// Seleciona todos os h3
$h3_nodes = $xpath->query("//h3");

foreach($h3_nodes as $h3) {
    // Pega o texto do h3
    $texto = trim($h3->textContent);

    // Pega o link dentro do h3 (se existir)
    $link_node = $h3->getElementsByTagName('a')->item(0);
    $link = $link_node ? $link_node->getAttribute('href') : '#';

    if(!empty($texto)) {
        echo "Título: " . $texto . "<br>";
        echo "Link: <a href='$link'>$link</a><br><br>";
    }
}
?>
