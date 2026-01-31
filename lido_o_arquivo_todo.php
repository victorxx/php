<?php
$arquivo=fopen("arquivo.txt",'r');
if($arquivo)
    {
        $parar=0;

        while($parar==0)
            {
                $linha=fgets($arquivo);
                if($linha==false)
                    {
                        echo "lido tudo";
                        break;
                    }
            }
        fclose($arquivo);
       
    }
?>
