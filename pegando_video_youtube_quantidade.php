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
$contador=0;
foreach($id as $video)
    {
        $contador++;
        echo"https://www.youtube.com/embed/$video<br>";
        if($contador==5)
            {
                break;
            }
    }
?>
