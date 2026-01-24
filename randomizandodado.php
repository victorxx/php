
<?php
$puxar=glob("*.html");
$link='';
$texto='';
if(!empty($puxar))
    {
       $indice=array_rand($puxar);
       $link=$puxar[$indice];
       $texto=basename($puxar[$indice]);
       $texto=str_replace('.html','',$texto);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <style>
            body{
            height: 100vh;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            }
        a.botao{
            line-height: 190px;
            width:100%;
            text-align:center;
            max-width: 550px;
            height: 250px;
            justify-content: center;
            border-radius: 12px;
            box-shadow: 10px 10px 10px purple;
            font-size: 33px;
            display: flex;
            background-color: white;
            font-size: 55px;
            color:black;
            text-decoration: none;
        }
        </style>
    </head>
    <body>
       <a class="botao" href="<?php echo $link;?>">
        <?php echo $texto;?>
       </a>
    </body>
</html>
