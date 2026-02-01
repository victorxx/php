<?php
$matriz=[];
for($i=0;$i<2;$i++)
    {
     for($j=0;$j<2;$j++){
        $matriz[$i][$j]=rand(1,9);
     }
    }
foreach($matriz as $linha)
    {
        echo implode('',$linha)."<br>";
    }
?>
