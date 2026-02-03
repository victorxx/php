<?php
$linhas=file("arquivo.txt");
$linhas[2]="mudando a linha\n";
file_put_contents("arquivo.txt",$linhas);
?>
