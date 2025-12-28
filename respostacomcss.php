<!DOCTYPE html>
<html lang="pt-br">
    <head>
<style>
        body{
            background-color: orange;
            padding:10px;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        form{
            width:90%;
            height: 250px;
            border-radius: 12px;
            padding:10px
        }
        input{
            width:90%;
            height: 50px;
            font-size: 10px;
        }
        button{
            border-radius: 12px;
            background-color: orange;
            color:white;
            padding:10px 20px;
            font-size: 20px;
        }
        #resposta{
            width:350px;
            border-radius: 12px;
            background-color: red;
            font-size: 30px;
            text-align:center;
        }

</style>
    </head>
    <body>
<form method="post" name="nome">
    <input type="text" name="nome">
    <button type="submit" >ENVIAR OS DADOS</button>
</form>
    </body>
    <?php
if (isset($_POST['nome'])){
    $dado=$_POST['nome'];
    echo "<div id='resposta'>$dado</div>";
}

?>
</html>
