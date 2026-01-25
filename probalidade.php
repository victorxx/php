<?php
$tentativas=10000;
$pares=0;

for($i=0;$i<$tentativas;$i++){
    $dado=rand(1,6);
    if($dado % 2 ==0)
        {
            $pares++;
        }
}
$probalidade=$pares/$tentativas;
echo "A probalidade de tirar um par é $probalidade";
?>
