<?php
$filtro = 12;
$quantidade_compradas = 50;
$preco = 0;

if ($quantidade_compradas >= $filtro) {
    $preco = 1;
} else { // aqui é só else, sem condição
    $preco = 1.30;
}

$resposta = $preco * $quantidade_compradas;
echo "O valor total da sua compra é $resposta";
?>
