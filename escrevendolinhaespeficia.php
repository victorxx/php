<?php
$arquivo="pasta/teste.txt";
$linha_desejada="esta linha está sendo marcada";

$linhas=file_exists($arquivo)?file($arquivo,FILE_IGNORE_NEW_LINES):[];


while(count($linhas)<=50){
    $linhas[]="";
}
$linhas[33]=$linha_desejada;
file_put_contents($arquivo,implode("\n",$linhas));
echo 'escrito no arquivo com sucesso';








?>
