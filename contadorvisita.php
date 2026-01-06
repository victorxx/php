<?php
$arquivo="pasta/contador.txt";
if(!file_exists($arquivo)){
    file_put_contents($arquivo,"0");

}
$visitas=file_get_contents($arquivo);
$visitas++;
file_put_contents($arquivo,$visitas);
echo "número de visitas".$visitas;
?>
