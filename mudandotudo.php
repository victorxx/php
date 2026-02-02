<?php
$texto = "O céu é azul e o sol é quente.";
$novo=str_replace(
    ["céu","sol"],
    ["mar","lua"],
    $texto
);
echo $novo;

?>
