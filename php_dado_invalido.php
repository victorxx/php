<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <style>
                            body{
                font-family: Arial, Helvetica, sans-serif;
                padding:20px;
                text-align: center;
                background-color: palevioletred;
                            }
                form{
                    width:100%;
                    padding:20px;
                    text-align: center;
                    box-shadow: 10px 10px 20px plum;
                    height: 120px;
                }
                form input{
                    width:90%;
                    height: 120px;
                    padding:20px;
                    text-align: center;
                }
                button{
                    width:40%;
                    height: 120px;
                    box-shadow: 10px 10px 10px paleturquoise;
                    font-size: 33px;
                    border-radius: 12px;
                }
        </style>
    </head>
    <body>
<form method="post">
    <input type="number" name="p" placeholder="Digite 0 ou 1">
    <input type="number" name="r" placeholder="Digite 0 ou 1">
    <button type="submit">ENTRAR</button>
</form>
</body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $p=$_POST['p'];
    $r=$_POST['r'];
    if(($p!=0 && $r!=1)|| ($r!=0 && $r!=1)){
        echo "<script>
        alert('valor inválido');
              </script>";
    }
}
?>

</html>
