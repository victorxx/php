<?php
$arquivo = fopen("arquivo.txt", 'r+'); // abre para leitura e escrita

if (!$arquivo) {
    die("Não foi possível abrir o arquivo.");
}

// Lê o arquivo até o final para capturar a posição final
while (!feof($arquivo)) {
    $linha = fgets($arquivo);
    $posicao = ftell($arquivo); // pega a posição atual do ponteiro
    echo "posição $posicao<br>";
}

// Corrigido: usar a variável correta
$escrever = $posicao + 10;

// Move o ponteiro para a posição desejada
fseek($arquivo, $escrever);

// Escreve no arquivo a partir da posição atual do ponteiro
fwrite($arquivo, "escrevendo no ponteiro");

fclose($arquivo);
echo "ok finalizando";
?>
