<?php
$pasta="pasta";
$arquivo="arquivo.txt";
$conteudo="texto alternativo";
$caminho=$pasta.'/'.$arquivo;

if(!is_dir($pasta)){
    mkdir($pasta,0777,true);  
}
$ok=fopen($caminho,"w");
fwrite($ok,$conteudo);
fclose($ok);
?>
