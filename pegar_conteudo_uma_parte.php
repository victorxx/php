<?php
$buscar = "https://www.espiritosanto-es.com.br/produtos/nintendo.html";
$comecar = file_get_contents($buscar);

if ($comecar) {
    $texto = explode('Nintendo', $comecar);
    $limpo = strip_tags($texto[3]);
    echo $limpo;
    
   
}
?>
