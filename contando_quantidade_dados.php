<?php
$pasta="pasta/";
if(!is_dir($pasta)){
    mkdir($pasta,0777,true);
}
$paginas=[];
if(is_dir($pasta))
    {
        $arquivos=glob($pasta."*");
        foreach($arquivos as $arquivo){
            array_push($paginas,$arquivo);
            
        }
        $quantidade=count($paginas);
        echo $quantidade;

    }

?>
