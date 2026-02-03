<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>
            body{
                text-align: center;
                height: 100vh;
                color:white;
                font-size:80px;
                align-items: center;
                justify-content: center;
                display: flex;
                background-color: black;
            }
            form{
                width:90%;
                height: 330px;
            }
            input{
                border-radius: 12px;
                text-align: center;
                width:90%;
                font-size: 60px;
                height: 250px;
                background-color: orangered;
            }
            button{
                width:350px;
                background-color: orangered;
                height: 250px;
                border-radius: 12px;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <input id="numero" name="numero" placeholder="DIGITE A DISTÂNCIA">
            <input id="numero2" name="numero2" placeholder="DIGITE O TEMPO">
            <button type="submit">CALCULAR</button>
        </form>
    </body>
    <?php
    if($_SERVER["REQUEST_METHOD"]==='POST')
        {
            $numero=$_POST['numero'];
            $numero2=$_POST['numero2'];
            if(is_numeric($numero)||is_numeric($numero))
                {
                    $calcular=$numero/$numero2;
                    echo "A velocidade média".$calcular;
                }
        }
    
    ?>
</html>
