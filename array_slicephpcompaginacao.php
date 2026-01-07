<?php
$frutas=[
    "maça",'banana','laranja','mamao',"bolo"
];
$parte=array_slice($frutas,2,3);
foreach($parte as $fruta){
    echo $fruta."<br>";
}
?>
