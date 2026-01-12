<?php
$caminho="pasta/dado.txt";
$arquivo=fopen($caminho,"r");
$conteudo=fread($arquivo,filesize($caminho));
fclose($arquivo);
echo $conteudo;
?>
