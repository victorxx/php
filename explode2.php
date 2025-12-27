<?php
$elementos = "temos 300 reais";

// explode a string por espaço
$partes = explode(' ', $elementos);

// pega o segundo elemento (posição 1)
$valor = $partes[2];

echo $valor; // mostra "300"
?>
