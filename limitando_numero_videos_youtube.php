<?php
$url = "https://www.youtube.com/results?search_query=rica+games";
$html = file_get_contents($url);


$partes=explode('"url":"/watch?v=',$html);


$id=[];
$contador=0;
foreach($partes as $p){
if ($contador==3)
    {
        break;
    }
    $contador++;
    $id[]=substr($p,0,11);
}
foreach($id as $video)
    {
         echo "https://www.youtube.com/embed/$video<br>";
    }
?>
