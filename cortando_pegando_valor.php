<?php
$caminho="https://www.infomoney.com.br/mercados/dolar-hoje-abertura-fechamento-comercial-turismo-20012026/";
$buscar=file_get_contents($caminho);

if($buscar===false)
    {
        echo "Não foi possível entrar";
        exit;
    }
$filtro=strpos($buscar,"R$");
if($filtro!==false)
    {
        $cortando=substr($buscar,$filtro,7);
        $cortando=trim($cortando);
        echo $cortando;
    }
else{
    echo "não encontrado";
}
?>
