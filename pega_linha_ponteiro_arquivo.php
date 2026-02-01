<?php
$arquivo=fopen("arquivo.txt",'r');


while(!feof($arquivo))
    {
        $linha=fgets($arquivo);
        $posicao=ftell($arquivo);
        echo "$posicao";
    }
fclose($arquivo);
?>
