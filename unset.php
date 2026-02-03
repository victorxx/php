<?php
$linhas=file("arquivo.txt");
unset($linhas[0]);
$linhas=array_values($linhas);
file_put_contents("arquivo.txt",$linhas);
?>
