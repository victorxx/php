<?php
$matriz=[
    [1,2,3],
    [4,5,6]
];
foreach($matriz as $i => $linha)
    {
        $soma=array_sum($linha);
        echo "soma da linha $i:$soma<br>";
    }

?>
