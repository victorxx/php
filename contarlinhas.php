<?php
$arquivo="pasta/ok.txt";
$abrido=fopen($arquivo,"r");
$contador=0;

if($abrido){
    while(fgets($abrido)!==false){
        $contador++;
    }
    fclose($abrido);
    echo "o arquivo tem $contador linhas";
}else{
    echo "error abrir arquivo";
}
?>
