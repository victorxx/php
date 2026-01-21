


<?php
$caminho="https://www.icarros.com.br/comprar/sao-paulo-sp/honda/civic/2014/d55432087";

$buscar=@file_get_contents($caminho);
if($buscar===false)
    {
        echo "não foi possivel";
        exit;
    }
?>
