


<?php
$caminho="https://www.icarros.com.br/comprar/sao-paulo-sp/honda/civic/2014/d55432087";
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
$buscar=file_get_contents($caminho);
if($buscar===false)
    {
        echo "não foi possivel";
        exit;
    }
?>
