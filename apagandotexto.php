<?php
$arquivo="pasta/ok.txt";
if(file_exists($arquivo)){
    $linhas=file($arquivo);
    $achou=false;

    foreach($linhas as $linha){w
        if(preg_match("/victor/i",$linha)){
            $achou=true;
            break;
        }
    }
   
}
if($achou){
    file_put_contents($arquivo,"");
    echo"conteudo apagado";
}else{
    echo "ok";
}

?>
