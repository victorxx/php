<?php
$html = file_get_contents('https://cooabriel.coop.br/cotacao-do-dia');
$partes=explode('R$',$html);
$resto=$partes[2];
$fim=explode('</tr>',$resto);
echo $fim[0];

?>
https://cooabriel.coop.br/cotacao-do-dia
