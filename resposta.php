<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>prompt em php</title>
    </head>
    <body>
        <form method="post">
            <label>Digite algo</label>
            <input type="text" name="resposta">
            <button type="submit">PESQUISAR</button>
        </form>
        <?php
        if(isset($_POST['resposta'])){
            $entrada=$_POST['resposta'];
            if ($entrada=='victor'){
                echo'você digitou nome victor';
            }
        }
        ?>
    </body>
</html>
