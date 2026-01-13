<?php
$unico=[];
$arquivo="pasta";
$lendo=glob($arquivo."/*.txt");
foreach($lendo as $arquivo){
    array_push($unico,$arquivo);
}
$unicoo=array_unique($unico);
foreach($unicoo as $arquivo){
    echo $arquivo;
}
?>
