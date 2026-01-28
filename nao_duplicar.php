<?php
$url="https://www.youtube.com/results?search_query=rica+games";
$html=file_get_contents($url);

$partes=explode('"url":"/watch?v=',$html);

array_shift($partes);

$id=[];
foreach($partes as $p)
    {
        $id[]=substr($p,0,11);
    }
$id=array_unique($id);//unico;
foreach($id as $video)
    {
        echo "https://www.youtube.com/embed/$video<br>";
    }
?>
