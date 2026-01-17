<?php
$arquivos=glob("pasta/*");
$itens_por_pagina=2;
$total_p=ceil(count($arquivos)/$itens_por_pagina);
echo "número de páginas serão é esse aqui->$total_p";
echo "ok";
?>
