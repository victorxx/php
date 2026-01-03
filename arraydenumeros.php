<?php
// Array de números
$numeros = [1, 2, 3, 4, 5, 6, 7];
$pares=array_filter($numeros,function($n){
return $n % 2 ===0;
});
print_r($pares);
?>
