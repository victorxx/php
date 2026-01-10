<!DOCTYPE html>
<html lang="pt-br">
    <head>
<meta charset="utf-8">
<title>cadastro</title>
<style>
    form{
        width: 100%;
        background-color: purple;
        padding:20px;
        text-align: center;
        border-radius: 12px;
        box-shadow: 10px 10px 10px powderblue;
        font-size: 44px;
        overflow: hidden;
    }
    form input{
        width:90%;
        height: 120px;
        padding:20px;
        text-align: center;
        border-radius: 12px;
        box-shadow: 10px 10px 10px yellowgreen;
    }
    button{
        width:50%;
        height: 90px;
        font-size: 30px;
        box-shadow: 10px 10px bisque;
    }
</style>
</head>
<body>
<form method="post">
<input type="number" name="valor" placeholder="Digite o valor">
<br>
<br>
<input type="number" name="porcentagem" placeholder="Digite o valor da porcentagem">
<br><br>
<button type="submit">ENVIAR</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
     $valor=$_POST['valor'];
     $porcentagem=$_POST['porcentagem'];
     $resultado=($valor*$porcentagem)/100;


     $valor_texto = (string) $valor;
     $porcentagem_texto=(string)$porcentagem;
     $resultado_texto=(string)$resultado;

    echo "<script>alert('$porcentagem_texto % de $valor_texto é de $resultado_texto')</script>";
}
?>
</body>
</html>
