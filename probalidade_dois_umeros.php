<?php
$tentativas=10000;
$sucesso=0;
for($i=0;$i<$tentativas;$i++)
    {
        $dado1=rand(1,6);
        $dado2=rand(1,6);
        if($dado1==6 && $dado2==6)
            {
                $sucesso++;
            }
    }
$probalidade=$sucesso/$tentativas;
echo "ok a probalidade de ter dois acertos são $probalidade %";
?>
