<?php
$numeros=[1,2,3,4,5,6];


$dobrados=array_map(function($num){
    return $num*2;
},$numeros);
foreach($dobrados as $n)
    {
        echo $n."<br>";
    }
?>
