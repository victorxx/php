<?php
$file=@fopen("conteudo.txt","r");

if($file)
    {
        while(!feof($file))
            {
                $linha=fgets($file);

            }
            fclose($file);
            echo "arquivo lido com sucesso";
    }
?>
