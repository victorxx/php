<?php
$arquivo="pasta/imovel.txt";
if(file_exists($arquivo)){
    $linhas=file($arquivo,FILE_IGNORE_NEW_LINES);
    $nome="";
    $opcao="";
    foreach($linhas as $linha){
        $linha=trim($linha);
        if(strpos($linha,"Nome:")===0){
            $nome=trim(str_replace("Nome:","",$linha));
           
        }
        if(strpos($linha,"Opção:")===0){
            $opcao=trim(str_replace("Opção:","",$linha));
           
        }
    }
    switch($opcao){
        case "vender":
            echo "A opção para imóvel $nome é de $opcao";
            break;
    }

}
?>
