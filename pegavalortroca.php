<?php
$url = file_get_contents('C:/Users/vitor/Desktop/pagina.html');

// Divide o conteúdo pelo termo "ouro"
$explode = explode('ouro', $url);
$transforma=(string) $explode[1];
$remover=str_replace('o preço é',' ',$transforma);
echo $remover;
?>
