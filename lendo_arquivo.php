<?php
$conteudo="conteudo.txt";
$contagem=0;
$arquivo=fopen($conteudo,"r");

if($arquivo)
    {
        while(!feof($arquivo))
            {
                echo "lendo o arquivo";
            }
    }
fclose($arquivo);
echo "<script>alert('lido tudo')</script>";
?>
