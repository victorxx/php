<?php
$html = file_get_contents('file:///C:/Users/vitor/Desktop/pagina.html');

$partes=explode('prata',$html);

$resto=$partes[1];
$fim=explode('</li>',$resto);
echo $fim[0];

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
    .container{
       width:550px;
       padding:20px;
       background-color: orange;
       border-radius: 12px;
       text-align: center;
       font-size: 20px;
       left: 50%;
       top:50px;
       transform:translateX(-50%);
       position: absolute;

    }
    @media(max-width:550px){
        .container{
            width:90%;
            font-size: 20px;
        }
    }
</style>
    </head>
    <body>
<div class="container">
    <li>preço do ouro 1.5</li>
    <li>preco da prata 1.2</li>
</div>
    </body>
</html>
