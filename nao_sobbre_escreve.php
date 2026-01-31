<?php
$conteudo="conteudo.txt";
$arquivo=fopen($conteudo,"w");
for($i=0;$i<11;$i++)
    {
        if($i<8)
            {
                fwrite($arquivo,PHP_EOL);
            }
        else if($i==8)
            {
                fwrite($arquivo,"Nome:".PHP_EOL);
            }
        else if($i==9)
            {
                fwrite($arquivo,"r".PHP_EOL);
            }
    }
fclose($arquivo);
echo "<script>alert('arquivo criado com sucesso')</script>";



?>
