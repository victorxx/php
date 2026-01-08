<?php
$letras=['a', 'B', 'c', 'D', 'e', 'F'];
foreach($letras as $letra){
    if(ctype_upper($letra)){
        echo $letra."->A letra em questão é maiscula<br>";
    }
}
?>
