<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <style>
            input{
                width: 90%;
                font-size: 20px;
                height: 50px;
                border-radius: 12px;
                box-shadow: 10px 10px purple;
            }
            body{
                display: flex;
                background-color: blue;
                position:relative;
                line-height: 120px;
                height: 100vh;
                justify-content: center;
            }
            form{
                border-radius: 12px;
                position:absolute;
                top:120px;
                width:100%;
                height: 1020px;
                max-width: 660px;
            }
            button{
                width:440px;
                border-radius: 50%;
                cursor:pointer;
                border-radius: 12px;
                height: 330px;
                font-size: 40px;
                position:relative;
                left: 110px;
            }
        </style>
    </head>
    <body>
<form method="post">
    <input id="nota" name="nota" placeholder="Digite uma nota">
    <button type="submit">GRAVAR</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]==='POST')
    {
        $nota=$_POST['nota'];
        if(empty($nota))
            {
                echo "<script>alert('campo está vázio')</script>";
            }else if(is_numeric($nota))
            {
                $resposta=$nota>=6?'Aprovado':'Reprovado';
                
                echo "<script>alert('$resposta')</script>";
            }
    }
?>
</body>
</html>
