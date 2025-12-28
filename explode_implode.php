<?php


$frutas=['maca','banana','laranja'];

$string=implode(',',$frutas);
echo $string;
echo '<br>';

$array=explode(',',$string);
print_r($array);


?>
