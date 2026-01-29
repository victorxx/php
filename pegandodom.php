<?php
// URL da página
$url = 'https://www.espiritosanto-es.com.br/saopaulo/';

// Lê o conteúdo da página
$html = file_get_contents($url);

// Cria DOMDocument
$dom = new DOMDocument();
@$dom->loadHTML($html); // @ evita warnings

// Pega todas as tags <a>
$links = $dom->getElementsByTagName('a');

// Array para guardar todos os links
$lista = [];

// Mostra os links e adiciona no array
foreach ($links as $a) {
    $href = $a->getAttribute('href');
    // Corrige links relativos adicionando domínio
    if (strpos($href, 'http') !== 0) {
        $href = 'https://www.espiritosanto-es.com.br' . $href;
    }
    
    array_push($lista, $href);
}

// Escolhe um link aleatório
$escolher = array_rand($lista);
 echo"<a href=' $lista[$escolher]'>+ conteúdo</a>";
?>
