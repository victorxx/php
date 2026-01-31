<?php
$conteudo = "conteudo.txt";
$arquivo = fopen($conteudo, "a");

for ($i = 0; $i < 11; $i++) {

    if ($i < 8) {
        fwrite($arquivo, PHP_EOL);
    } else if ($i == 8) {
        fwrite($arquivo, "NOME:" . PHP_EOL);
    } else if ($i == 9) {
        fwrite($arquivo, "victor");
    }

}

fclose($arquivo);

echo "<script>alert('Arquivo criado com sucesso');</script>";
?>
