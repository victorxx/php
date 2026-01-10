<?php
$arquivo="pasta/dado.txt";
if(file_exists($arquivo)){
    $linhas=file($arquivo,FILE_IGNORE_NEW_LINES);
    foreach($linhas as $linha){
        if(str_contains($linha,"Primeiro:")){
            $nome=trim(str_replace("Primeiro:","",$linha));
            echo $nome."<br>";
        }
    }
    
}
?>
