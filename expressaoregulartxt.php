<?php
$ler=fopen("pasta/a.txt","r");

while($linha=fgets($ler)){
    if(preg_match("/l/",$linha)){
        echo "temos sim";
    }
}
fclose($ler);
?>
