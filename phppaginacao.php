<?php
$paginas=$_GET['pagina']??1;
$por_pagina=1;

$arquivos=glob(__DIR__ . "/pasta/*.txt");


$inicio=($paginas-1)* $por_pagina;
$fim=$inicio+$por_pagina;
for($i=$inicio;$i<$fim && $i < count ($arquivos);$i++){
    echo $arquivos[$i];
}
?>
