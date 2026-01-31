<?php
$arquivo = fopen("arquivo.txt", "w");

for ($i = 0; $i < 10; $i++) { // 9 linhas em branco + 1 linha com "victor"
    if ($i < 9) {
        fwrite($arquivo, PHP_EOL);
    } else {
        fwrite($arquivo, "victor" . PHP_EOL);
    }
}

fclose($arquivo);
echo "<script>alert('finalizado')</script>";
?>
