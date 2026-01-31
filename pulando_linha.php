<?php
$conteudo="RELATORIO DE VENDAS".PHP_EOL;
$conteudo.="===============================".PHP_EOL;
$conteudo.="PRODUTO A: 50 UNIDADES".PHP_EOL;
$conteudo.="PRODUTO B:30 UNIDADES".PHP_EOL;
$conteudo.="PRODUTO C:20 UNIDADES".PHP_EOL;
$arquivo="relatorio.txt";
file_put_contents($arquivo,$conteudo);
echo "<script>alert('arquivo criado')</script>";
?>
