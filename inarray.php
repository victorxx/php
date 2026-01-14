<?php
$pagina=isset($_GET['pagina'])?$_GET['pagina']:'index';
$arquivo="pasta/";
$mudar=[];
if(is_dir($arquivo)){
    $lido=glob($arquivo."*");
    foreach($lido as $lendo){
        $mudar[]=$lendo; 
    }
}
$mudando=str_replace(['pasta/',".txt"],"",$mudar);
if(in_array($pagina,$mudando)){
    echo "ok";
}else{
    echo "arquivo não existe";
}
?>
