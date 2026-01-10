<?php
$frutas=['banana','laranja','uva'];
unset($frutas[0]);
$frutas=array_values($frutas);
print_r($frutas);
?>
