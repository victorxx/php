<!DOCTYPE html>
<html lang="pt-br">
    <head>
<meta charset="utf-8">
<title>cadastro</title>
<style>
            form{
                width:100%;
                background-color: purple;
                padding:20px;
                text-align: center;
                border-radius: 12px;
                box-shadow: 10px 10px 10px yellow;
                font-size: 44px;
            }
            form input{
                width:90%;
                height: 120px;
                padding:20px;
                text-align: center;
                border-radius: 12px;
                box-shadow: 10px 10px 10px purple;
            }
            button{
                width:50%;
                height: 90px;
                font-size: 30px;
                box-shadow: 10px 10px 10px blue;
                border-radius:20px;
            }
</style>
    </head>
    <body>
<form method="post">
<input type="text" name="elemento" placeholder="digite nome carro">
<br>
<br>
<input type="text" name="elemento2" placeholder="digite o nome do dono">
<button type="submit">GRAVAR</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $arquivo="pasta/dado.txt";
    if(!file_exists($arquivo)){
        file_put_contents($arquivo,"");
    }
    $primeiro=$_POST['elemento'];
    $segundo=$_POST['elemento2'];
    $conteudo.="Primeiro:$primeiro\n";
    $conteudo.="Segundo:$segundo\n";
    $conteudo.="-----------------------\n";
    file_put_contents($arquivo,$conteudo,FILE_APPEND);
    echo"<script>alert('adicionado')</script>";
}
?>
</body>
</html>
