<?php

$url = "https://www.espiritosanto-es.com.br/";
$html = file_get_contents($url);

$dom = new DOMDocument();
@$dom->loadHTML($html);

// Array para guardar os links
$dados = [];

foreach ($dom->getElementsByTagName('a') as $a) {
    $link = $a->getAttribute('href');
    array_push($dados, $link);
}
$escolher=array_rand($dados);
echo "https://www.espiritosanto-es.com.br".$dados[$escolher];
?>
