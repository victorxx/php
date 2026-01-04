<?php
$ler=fopen("pasta/a.txt","r");
while($linha=fgets($ler)){
    if(strpos($linha,"l")!==false){
        echo "temos sim";
    }
}
fclose($ler);
?>
