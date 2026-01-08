<!DOCTYPE html>
<html  lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <style>
            button{
                width:auto;
                height: 100px;
                border-radius: 12px;
                background-color: orangered;
                font-size: 33px;
            }
            .form{
                width:100%;
                position:absolute;
                display: flex;
                height: 330px;
                background-color: orangered;
                padding:20px;
                text-align: center;
                align-items: center;
                font-size: 30px;
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
            <input placeholder="DIGITE 0 OU 1 O VALOR DE P" name="p">
            <input placeholder="DIGITE 0 OU 1 O VALOR DE R " name="r">
            <br>
            <button type="submit">PESQUISAR</button>
        </form>
    </body>
    <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    echo "ok";
}
    ?>
</html>
