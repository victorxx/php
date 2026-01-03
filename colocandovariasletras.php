


<?php
$texto = "banana é gostoso";

if(preg_match("/[aé]/",$texto)){
    echo "a letra existe sim";
}else{
    echo "a letra não existe não";
}
?>
