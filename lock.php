<?php

$nome="pasta";
$arquivo="ok.txt";
$caminho=$nome.'/'.$arquivo;

if(!is_dir($nome)){
    mkdir($nome);
}
if(!file_exists($caminho)){
    file_put_contents($caminho,"conteudo criado\nok");
}else{
    file_put_contents($caminho,"ok",FILE_APPEND|LOCK_EX);

}
$linhas=file($caminho);
foreach($linhas as $linha){
    echo $linha."<br>";
}


?>
