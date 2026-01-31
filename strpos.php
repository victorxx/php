<?php
$texto="
Nome:Victor
Nome:Ricardo
Nome:Catarina
Nome:Rosa
";
$linhas=explode("\n",$texto);



foreach($linhas as $linha)
    {
        $linha=trim($linha);
        if(strpos($linha,"Nome:")===0)
            {
                $nome=substr($linha,4);
                echo "Nome:encontrado$nome<br>";
            }
    }
?>
