<?php
$verificar = "https://sbtnews.sbt.com.br/noticia/saude/anvisa-aprova-generico-de-remedio-para-refluxo-gastroesofagico-que-custa-mais-de-r-100";
$puxar = file_get_contents($verificar);

if ($puxar === false) {
    echo "não foi possivel";
    exit;
}

$primeiro_termo = strpos($puxar, "R$");
$segundo_termo = strpos($puxar, "SBT News");  

if ($primeiro_termo !== false && $segundo_termo !== false) {
    $tamanho = $segundo_termo - $primeiro_termo;
    $cortando = substr($puxar, $primeiro_termo, $tamanho); // só 3 argumentos
    $cortando = strip_tags($cortando);
    echo $cortando;
}
?>
