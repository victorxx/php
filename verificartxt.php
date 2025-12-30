<?php

$pasta='pasta';
if(is_dir($pasta)){
    $arquivos=glob($pasta.'/*.txt');
    if($arquivos){
        echo 'ok ta tudo certo temos arquivos txt';
    }
}
?>
