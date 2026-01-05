<!DOCTYPE html>
<html lang="pt-br">
    <head>
<style>
    body{
        background-color: orangered;
        padding:20px 10px;
        text-align: center;
        color:black;
    }
    form{
        width:100%;
        height: 350px;
        overflow:hidden;
        text-align: center;
        padding:20px;
    }
    form input{
        width:90%;
        padding:20px;
        border-radius: 12px;
        padding:20px;
    }
    button{
        width:50%;
        height: 110px;
        font-size: 390%;
        box-shadow: 10px 10px 10px;
        border-radius: 12px;
        padding:20px;
        text-align: center;
        border-radius: 12px;

    }
</style>
    </head>
    <body>
        <form method="post">
            <input type="text" placeholder="Primeira linha" name="primeiro">
            <br>
            <br>
            <input type="text" placeholder="Segunda linha" name="segundo">
            <br>
            <br>
            <button type="submit">ENVIAR</button>
        </form>
    </body>
    <?php
    $primeiro=$_POST['primeiro'];
    $segundo=$_POST['segundo'];
    $arquivos="pasta/ok.txt";
    $linhas=file($arquivos,FILE_IGNORE_NEW_LINES);
    $linhas[1]=$primeiro;
    $linhas[2]=$segundo;
    $novas=[$linhas[1],$linhas[2]];
    file_put_contents($arquivos,implode("\n",$novas));
    echo "linha modificada com sucesso";
    ?>
</html>
