<?php

$dados='ok';
$dado='<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>
        .container{
            width:50%;
            height: 250px;
            text-align: center;
            background-color: orange;
            border-radius: 12px;
            position: absolute;
            left: 20%;
            line-height: 120px;
            bottom:33%;
            font-size: 50px;
        }
        </style>
    </head>
    <body>
        <div class="container">' 
        . $dados .
        '</div>
    </body>
</html>';
echo $dado;

?>
