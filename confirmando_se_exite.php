<?php
$texto="bitcoin esta valorizado";
if(strpos($texto,"bitcoin")!==false)
    {
        $partes=explode('bitcoin',$texto);
        print_r($partes);
    }
?>
