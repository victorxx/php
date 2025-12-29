<?php
$texto='o leão está doente e triste';
$novo=str_replace(
['doente','triste'],
['feliz','saudavel'],
$texto
);
echo $novo;

?>
