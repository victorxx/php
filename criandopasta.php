<?php

$pasta='pasta';

if(!is_dir($pasta)){
    mkdir($pasta);
    echo 'pasta criada com sucesso';
}else{
    echo'pasta já existe';
}
?>
