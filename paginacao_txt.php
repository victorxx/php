<?php
$pagina=$_GET['pagina']??'index';

$pasta=glob(__DIR__."/pasta/*.txt");

if($pagina=="index"){
    foreach($pasta as $arquivo){
        $remover=pathinfo($arquivo,PATHINFO_FILENAME);
        echo "<a href='?pagina=$remover'>ok</a><br>";
        break;
    }
}
if($pagina!="index"){
    foreach($pasta as $arquivo){
        $remover=pathinfo($arquivo,PATHINFO_FILENAME);
        if($remover==$pagina){
            $lendo=file_get_contents($arquivo);
            echo $lendo;
            break;
        }
    }
}
?>
