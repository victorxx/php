<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <style>
            *{
                box-sizing: border-box;
            }
            body{
                margin:0;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: black;
            }
            form{
                width:90%;
                max-width: 550px;
                padding:20px;
                border-radius: 12px;
                box-shadow: 10px 10px purple;
                background-color: red;
            }
            input,textarea{
                width:100%;
                height: 50px;
                border-radius: 12px;
                margin-bottom:20px;
                padding:20px;
                font-size: 20px;
            }
           textarea{
            height: 120px;
           }
           button{
            width:150px;
            height: 50px;
            box-shadow: 10x 10px purple;
            font-size: 20px;
            border:none;
            cursor:pointer;
            border-radius: 20px;
           }
        </style>
    </head>
    <body>
<form method="post">
    <input name="titulo" placeholder="digite o titulo" required>
    <textarea name="texto" placeholder="digite o texto" required>
        
    </textarea>
    <br>
    <button type="submit">GRAVAR</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]==="POST")
    {
        $titulo=$_POST['titulo'];
        $texto=$_POST['texto'];
       
    }
?>
</body>
</html>
