<?php
$numeros=[1,2,3,4];
$soma=0;
foreach($numeros as $n)
    {
        if($n%2==0)
            {
                $soma+=$n;
            }
    }
echo $soma;
?>
