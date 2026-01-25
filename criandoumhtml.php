<?php
$tags="<h1>exemplo</h1>";
$dados="arquivo.html";
$pasta="pasta/";


$juntar=$pasta.$dados;

if(!is_dir($pasta))

    {
        mkdir($pasta,0777,true);
    }
if(file_put_contents($juntar,$tags))
    {
        echo "<script>alert('ok')</script>";

    }
else
    {
        echo "<script>alert('error')</script>";
    }
?>
