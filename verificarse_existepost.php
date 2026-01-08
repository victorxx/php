<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta name="viewport" content="width=device-width,initial-scale-1.0">
<style>
    button{
        width:auto;
        height: 100px;
        border-radius: 12px;
        background-color: orange;
        font-size: 33px;
        padding:20px 10px;
        box-shadow: 10px 20px 30px purple;
    }
    .form{
        width:100px;
        position:absolute;
        display: flex;
        height: 330px;
        background-color: orangered;
        padding:20px;
        box-shadow: 10px 20px 20px purple;
        text-align: center;
        align-items:center;
        font-size: 44px;
    }
    form input{
        width:90%;
        height: 250px;
        padding:20px;
        text-align: center;
    }

</style>
</head>
<body>
    <form method="post">
    <input type="number" placeholder="DIGITE 0 OU 1 O VALOR DE P"name="p">
    <input type="number" placeholder="DIGITE 0 OU 1 O VALOR DE R " name="r">
    <button type="submit">ENVIAR</button>
    </form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    echo "ok";
}
?>
</html>
