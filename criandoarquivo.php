<!DOCTYPE html>
<html lang="pt-br">
    <head>
<body>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;

    }
    form{
        width:100%;
        max-width:600px;
        margin:40px auto;
    }
    .input{
        width:100%;
        height: 40px;
        border-radius: 40px;
        padding:20px;
        box-sizing: border-box;
    }
   textarea{
    width:100%;
    min-height: 150px;
    border-radius: 12px;
    resize: vertical;
    padding:20px;
   }
   button{
    margin-top:20px;
    padding:20px 10px;
    border-radius: 12px;
    cursor: pointer;
   }
</style>
</body>
</head>
<body>
<form method="post">
    <input class="input" type="text" placeholder="Digite o texto" name="titulo">
    <textarea name="texto" placeholder="Digite um texto"></textarea>
    <button type="submit">GRAVAR O ARQUIVO</button>
</form>
</body>
<?php
if($_POST){
$titulo=$_POST['titulo'];
$texto=$_POST['texto'];
$arquivo='pasta/'.$titulo.'.txt';

file_put_contents($arquivo,$titulo."\n\n".$texto);
echo "gravado o arquivo";
}
?>
</html>
