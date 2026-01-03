<?php
$alimentos=['banana','limao','leite','arroz','pudim'];

$buscar=array_filter($alimentos,function($n){
return strpos($n,"mao");
});
echo "retornando o certo<br>";
print_r($buscar);
?>
<?php
$alimentos2=['comida','bebida','alimento_liquido'];
$buscar2=array_filter($alimentos2,function($n2){
    return strpos($n2,"da")==false;
});
echo"<br>";
echo "retornando o errado<br>";
print_r($buscar2);
?>
