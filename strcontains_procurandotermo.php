<?php
#arquivo_legado;
$arquivo="pasta/dados.txt";
if(file_exists($arquivo)){
    $files=file($arquivo);
    foreach($files as $file){
        if(strpos($file,"Nome:")===0){
            echo"PROCURAR TERMO NO MODELO NOVO";
        }
    }
}
#software moderno
if(file_exists($arquivo)){
    $files2=file($arquivo);
    foreach($files2 as $file2){
        if(str_contains($file2,"Nome:")){
            echo"<br><br><br>";
            echo "procurar termo com novo PHP";
        }
    }
}
?>
