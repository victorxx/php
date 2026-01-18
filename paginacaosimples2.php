<?php
$arquivos = glob("pasta/*");
$itensPorPagina = 2;
$totalPaginas = ceil(count($arquivos)/$itensPorPagina);
$pagina = max(1, min($totalPaginas, ($_GET['pagina']??1)));
foreach(array_slice($arquivos, ($pagina-1)*$itensPorPagina, $itensPorPagina) as $a) echo basename($a)."<br>";
for($i=1;$i<=$totalPaginas;$i++) echo "<a href='?pagina=$i'>$i</a> ";
?>
