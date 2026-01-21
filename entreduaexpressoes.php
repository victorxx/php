<?php
$texto="O CACHORRO COMEU SUA RAÇÃO HJ";
$inicio=strpos($texto,"CACHORRO");
$fim=strpos($texto,"RAÇÃO");
$cortar=substr($texto,$inicio,$fim);
echo $cortar;
?>
