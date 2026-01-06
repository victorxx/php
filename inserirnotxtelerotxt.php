<!DOCTYPE html>
<html lang="pt-br">
    <head>
<style>
            body{
                background-color: orangered;
                padding:20px;
                text-align:center;
                color:black;
            }
            form{
                width:100%;
                height: 330px;
                padding:20px;
                overflow: hidden;
                text-align: center;
            }
            form input{
                width:90%;
                padding:20px;
                border-radius: 12px;
            }
            button{
                width:50%;
                height:110px;
                font-size: 250%;
                box-shadow: 12px;
                border-radius: 12px;
                text-align: center;
                cursor:pointer;
            }
</style>
    </head>
    <body>
<form method="post">
    <input type="text" placeholder="primeiro" name="primeiro">
    <br>
    <input type="text" placeholder="segundo" name="segundo">
    <br>
    <button type="submit">INSERIR</button>
</form>
<?php
if($_POST){
    $primeiro = $_POST['primeiro'];
    $segundo = $_POST['segundo'];

    $caminho_completo="pasta/ok.txt";
    $linhas=file($caminho_completo,FILE_IGNORE_NEW_LINES);
    $linhas[0]=$primeiro;
    $linhas[1]=$segundo;
    $OK=[$linhas[0], $linhas[1]];
    file_put_contents($caminho_completo,implode("\n",$OK));
    echo "linha modificada ok";
}
?>
</body>
</html>
<?php
$arquivo="pasta/ok.txt";
$conteudo=file($arquivo);
echo $conteudo[0];
echo "<br><br><br>";
echo $conteudo[1];
?>
