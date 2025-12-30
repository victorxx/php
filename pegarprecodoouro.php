<?php
$html = file_get_contents('file:///C:/Users/vitor/Desktop/pagina.html');

$inicio = strpos($html, 'Ouro preço');
if($inicio!==false){
   $partes=substr($html,$inicio);
   
   $fim=strpos($partes,'</div>');
   $linha=substr($partes,0,$fim);
   echo $linha;
}
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
    <div class="item">Ouro preço 1.3</div>
    <div class="item">Prata preco1.2</div>
    <div class="item">Bronze preco1.2</div>
</div>
    </body>
</html>
