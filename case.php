<?php

$pagina=isset($_GET['pagina'])?$_GET['pagina']:'index';

switch($pagina){
    case 'vitor':
        echo 'ok você está na página certa';
        break;

    default:
    echo 'pagina';
    break;
}   


?>
