<?php
$html = file_get_contents("https://recomendadodia23.blogspot.com/");

libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML($html);
libxml_clear_errors();

$xpath = new DOMXPath($dom);
$h3s = $xpath->query("//h3"); // pega todos os <h3>

foreach ($h3s as $h3) {
    $texto = trim($h3->textContent);
    if (!empty($texto)) { // ignora h3 vazios
        echo $texto . "<br>";
    }
}
?>
