<?php

$pasta='pasta';
$buscar=glob($pasta.'/*.txt');

if($buscar){
    foreach($buscar as $buscas){
        echo $buscas;
    }
}

if($buscar){
    echo '<br><br><br>';
    foreach($buscar as $buscass){
        $nome=pathinfo($buscass,PATHINFO_FILENAME);
        echo $nome;
    }
}

?>
