<?php
ob_start();

$url = "https://www.youtube.com/results?search_query=rica+games";


$html = file_get_contents($url);

if ($html === false) {
    die('erro ao acessar');
}
$partes=explode('"url":"/watch?v=',$html);
array_shift($partes);
$id=[];
foreach($partes as $p)
    {
        $videid=substr($p,0,11);
        $id[]=$videid;
        echo "pegando os dados<br>";
        flush();
        sleep(0.3);
    }
?>
