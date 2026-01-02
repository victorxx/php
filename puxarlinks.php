<?php
$arquivo = "C:/Users/vitor/Desktop/pagina.html";

$conteudo=file_get_contents($arquivo);
$partes=explode('href="',$conteudo);
foreach($partes as $parte){
   $link=explode('"',$parte)[0];
   echo "<a href='$link' target='_blank'>$link</a></li><br><br>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <style>
        .container{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            padding:20px;
            text-align: center;
            padding:20px;
            background-color: orange;
            border-radius: 12px;
            gap:20px;
        }
        .container div{
            width:300px;
            height: 250px;
            padding:20px;
            background-color: red;
            border-radius: 12px;
            text-align: center;
            font-size: 50px;
            line-height: 120px;
        }
    </style>
    </head>
    <body>
     <div class="container"  >
     <div><a href="https://www.google.com">google</a></div>
     <div><a href="https://www.youtube.com">youtube</a></div>
     </div> 
    
    </body>
</html>
