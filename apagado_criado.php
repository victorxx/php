<?php
$arquivo = "arquivo.txt";

if (file_exists($arquivo)) {
    unlink($arquivo);
    echo "Arquivo apagado";
} else {
    file_put_contents($arquivo, "Arquivo criado");
    echo "Arquivo criado";
}
?>
