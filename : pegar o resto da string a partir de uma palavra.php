<?php
$texto = "O Rio de Janeiro é lindo";
$pos = strpos($texto, "Rio"); // encontra "Rio" na posição 2

if ($pos !== false) {
    $resto = substr($texto, $pos); // pega do "Rio" até o final
    echo $resto; // Saída: "Rio de Janeiro é lindo"
}
?>
