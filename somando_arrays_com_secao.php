<?php
session_start();
$soma=null;
if($_SERVER["REQUEST_METHOD"]==='POST')
    {
        $entrada=$_POST['numero'];
        if(empty($entrada))
            {
                echo "<script>alert('Está vazio!')</script>";
                exit;
            }
        $numero=intval($entrada);



        if(!isset($_SESSION['numeros']))
            {
                $_SESSION['numeros']=[];
            }
        $_SESSION['numeros'][]=$numero;
        $soma=array_sum($_SESSION['numeros']);
        
        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <head>
    <style>
        body{
            height:60vh;
            padding:30px;
            background-color: black;
            justify-content: center;
            align-items: center;
            display: flex;
        }
        #soma{
            width:90%;
            height: 120px;
            border-radius: 12px;
            justify-content: center;
            align-items: center;
            display: flex;
            color:black;
            position:absolute;
            top:440px;
            margin-top:40px;
            font-size: 55px;
            background-color: white;
        }
        form{
            width:90%;
            padding:20px;
            flex-direction: column;
            background-color: lime;
            align-items: center;
            display: flex;
            justify-content: center;
        }
        input{

            box-shadow: 10px 10px purple;
            width:90%;
            font-size: 40px;
            text-align: center;
            margin-top:40px;
            height: 110px;
            border-radius: 12px;
        }
        button{
            box-shadow: 10px 10px yellow;
            border-radius: 12px;
            width:440px;
            font-size: 60px;
            height: 330px;
            cursor:pointer;
        }
    </style>
    </head>
    <body>
<form method="post"  >
    <input id="numero" name="numero" placeholder="Digite um número">
    <button type="submit">GRAVAR</button>
    
</form> 
<div id="soma">
    <?php if($soma!==null):?>
        SOMA :<?=$soma?>
    <?php endif;?>
</div>
</body>
</html>
