<?php
$pasta='pasta';
$url=isset($_GET['pagina'])?$_GET['pagina']:'index';


if(is_dir($pasta)){
    $arquivo=glob($pasta.'/*.txt');

    if($arquivo){
        foreach($arquivo as $arquivos){
            $limpando=pathinfo($arquivos,PATHINFO_FILENAME);

            if($limpando!=$url){
                echo '<a href="?pagina='.$limpando.'">'.$limpando.'</a><br>';
            }
        }
    }
}
switch($url){
    case 'ok':
        $arquivoatual=$pasta.'/'.$url.'.txt';
        $conteudo=file_get_contents($arquivoatual);
        echo '<hr>';
        echo $conteudo;
        break;
}

?>
