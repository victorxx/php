<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>
           body{
            background-color: black;
            height: 100vh;
            display: flex;
            align-items: center;
            color:white;
            justify-content: center;
           }
           form{
            width:90%;
            max-width: 660px;
            box-shadow: 10px 10px purple;
            border-radius: 12px;
            background-color: yellow;
           }
           input,textarea{
            width:90%;
            margin:10px;
            padding:20px;
            font-size: 33px;
            border-radius: 12px;
           }
           button{
            width:150px;
            height: 50px;
            box-shadow: 10px 10px purple;
            cursor:pointer;
            border-radius:22px;
            font-size: 33px;
           }
        </style>
    </head>
    <body>
<form method="post"    >
<input type="text" name="titulo" placeholder="Digite o seu titulo">
<br>
<br>
<br>
<input type="text" name="conteudo" placeholder="Digite o seu conteudo">
<br>
<br>
<br>
<input type="number" name="quantidade" placeholder="Digite a linha a ser escrita">
<br>
<br>
<button type="submit">GRAVAR</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]==="POST")
    {
        $titulo=trim($_POST['titulo']);
        $quantidade=trim($_POST['quantidade']);
        $conteudo=trim($_POST['conteudo']);
        if(empty($titulo)||empty($quantidade)||empty($conteudo))
            {
                echo "<script>alert('campos vazios')</script>";
                exit;
            }
        $pasta="pasta/";
        if(!is_dir($pasta))
            {
                mkdir($pasta,0777);
            }
        $completo=$pasta.$titulo.".txt";
        if(!file_exists($completo))
            {
                file_put_contents($completo,"");
            }
        $linhas=file($completo);
        while(count($linhas)<$quantidade)
            {
                $linhas[]="";
            }
        $linhas[$quantidade-1]=$conteudo;
        file_put_contents($completo,implode("\n",$linhas));
        echo "<script>alert('criando arquivo')</script>";
        
        
    }
?>
</body>
</html>
