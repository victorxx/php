<?php
$pasta = "pasta";
$url = isset($_GET['pagina']) ? $_GET['pagina'] : 'index';

// Evita problemas de caminho com .
$url=basename($url);
if(is_dir($pasta)){
    $arquivos=glob($pasta.'/*.txt');

    if($arquivos){
        foreach($arquivos as $arquivo){
            $nome=pathinfo($arquivo,PATHINFO_FILENAME);
            if($nome!=$url){
                echo"<a href=\"?pagina=$nome\">$nome</a><br>";
            }
        }
    }
}
$arquivos_atual=$pasta.'/'.$url.'.txt';
if(file_exists($arquivos_atual)){
    echo file_get_contents($arquivos_atual);
    echo"<br>";
}
