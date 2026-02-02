<?php
$texto="Eu gosto de maçã, laranja e banana.";


$novo=str_replace(
    ["laranja","banana","maçã"],
    "fruta",
    $texto
);
echo $novo;

?>
