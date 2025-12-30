<?php
$handle = fopen('pasta/ok.txt', 'r'); // abre o arquivo
fgets($handle);
fgets($handle);
$terceira=fgets($handle);
fclose($handle);
echo $terceira;
?>
