<?php
$arquivo="pasta/ok.txt";
$linhas=file($arquivo,FILE_IGNORE_NEW_LINES);
$linhas[2]="linha alterada";

file_put_contents($arquivo,implode("\n",$linhas));
echo "linha modificada";
?>
