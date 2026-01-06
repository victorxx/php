<!DOCTYPE html>
<html lang="pt-br">
    <style>
        form{
            width:90%;
            height: 330px;
            background-color: orange;
            padding:20px;
            text-align: center;
            overflow: hidden;
            border-radius: 12px;
        }
        form input{
            width:90%;
            height: 240px;
            border-radius: 12px;
        }
        button{
            width: 250px;
            height: 120px;
            border-radius: 12px;
            background-color: olivedrab;
            font-size: 44px;
        }
    </style>
    <body>
<form method="post">
    <input type="text" placeholder="Digite seu email" name="email">
    <br>
    <button type="submit">VERIFICAR O EMAIL</button>
</form>
<?php
if($_POST){
    $texto=$_POST["email"];
    if(preg_match("/@[a-z0-9]/i",$texto)){
        echo "temos sim";
    }
}
?>
    </body>
</html>
