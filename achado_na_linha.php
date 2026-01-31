<?php
$conteudo="conteudo.txt";
$contagem=0;
$arquivo=fopen($conteudo,"r");
$parar="Nome:";

if($arquivo)
    {
        while(!feof($arquivo))
            {
                $linha=fgets($arquivo);
                $contagem++;
                if(trim($linha)==$parar)
                    {
                        echo "$contagem achou";
                        break;
                    }
            }
    }
    fclose($arquivo);
?>
