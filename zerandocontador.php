<?php
$arquivo="pasta/ok.txt";
if(!file_exists($arquivo)){
    file_put_contents($arquivo,"0");

}
$visitas=file_get_contents($arquivo);
$visitas++;
if($visitas>=10){
    echo "zerando<br>";
    $visitas=0;
}
file_put_contents($arquivo,$visitas);
echo "visitas".$visitas;
?>
