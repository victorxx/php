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
                box-shadow: 10px 10px 10px powderblue;
                font-size: 30px;
                overflow: hidden;
            }
            form input{
                width:90%;
                height: 150px;
                padding:20px;
                text-align: center;
                font-size: 33px;
                padding:20px;
                box-shadow: 10px 10px 10px powderblue;
                border-radius: 20px;
            }
            button{
                width:30%;
                height: 90px;
                font-size: 30px;
                padding:20px;
                text-align: center;
                overflow: hidden;
                box-shadow: 10px 10px 10px red;
                border-radius: 12px;
            }
           select{
            width:90%;
            height: 110px;
            padding:20px;
            border-radius: 12px;
            box-shadow: 10px 10px 10px red;
            top:30px;
           }
        </style>
    </head>
    <body>
<form method="post">
    <input type="text" name="nome" placeholder="nome do imovel">
    <br>
    <br>
    <br>
    <input type="number" name="numero" placeholder="quantidade de imovel">
    <br>
    <br>
    <select name="opcao">
        <option value="vender">VENDER</option>
        <option value="comprar">COMPRAR</option>
        <option value="Alugar">Alugar</option>
    </select>
    <button type="submit">ENVIAR</button>
</form>
 </body>
 <?php
 $arquivo="pasta/imovel.txt";
 if(!file_exists($arquivo)){
    file_put_contents($arquivo," ");

 }
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome=$_POST['nome'];
    $numero=$_POST['numero'];
    $opcao=$_POST["opcao"];

    $conteudo="Nome:$nome\n";
    $conteudo.="Numero:$numero\n";
    $conteudo.="Opção:$opcao\n";

 
    file_put_contents($arquivo,$conteudo,FILE_APPEND);
    echo "<script>alert('ok')</script>";

 }
 ?>
</html>
