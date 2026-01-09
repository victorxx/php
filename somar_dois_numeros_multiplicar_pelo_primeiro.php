somar dois números e multiplicar o resultado pelo primeiro número
<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<html lang="pt-br">
    <head>
<style>
    form{
        width:100%;
        height: 550px;
        padding:20px;
        text-align: center;
        overflow: hidden;
        font-size: 33px;
        box-shadow: 10px 10px 10px purple;
        bottom:20px;
    }
    form input{
        width:90%;
        height: 50px;
        padding:20px;
        text-align: center;
        border-radius: 12px;
        box-shadow: 10px 10px purple;
    }
    button{
        width:40%;
        height: 55px;
        padding:20px;
        border-radius: 12px;
        color:black;
    }
</style>
    </head>
<body>
    <form method="post">
<input type="number" placeholder="digite um número para fazer a conta" name="primeiro">
<br>
<br>
<input type="number" placeholder="digite um numero para fazer a conta" name="segundo">
<br>
<button type="submit">CALCULAR</button>
</form>
<?php
        try{
            if($_SERVER['REQUEST_METHOD']=="POST"){
            $primeiro=$_POST['primeiro'];
            $segundo=$_POST['segundo'];
            $somar=$primeiro+$segundo;
            $resultado=$somar*$primeiro;
            echo"<script>alert('o resultado do cálculo $resultado')</script>";
            }

            }catch(Exception $e){
                echo "<script>alert('opa deu algo errado')</script>";
            }

?>
</body>
</html>
