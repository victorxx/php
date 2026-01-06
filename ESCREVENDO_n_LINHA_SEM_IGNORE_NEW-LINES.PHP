<?php
$arquivo = "pasta/teste.txt";
$linha_desejada = "ok";

// Lê o arquivo ou cria array vazio
$linhas = file_exists($arquivo) ? file($arquivo) : [];

// Garante que exista a linha 51 (índice 50)
while (count($linhas) <= 50) {
    $linhas[] = "";
}

// Escreve na linha 51
$linhas[50] = $linha_desejada;

// Salva no arquivo
file_put_contents($arquivo, implode("\n", $linhas));

echo "Ok, está escrito!";
?>
