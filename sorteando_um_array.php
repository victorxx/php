<!DOCTYPE html>
<html lang="pt-br">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <head>
        <style>
           body{
            height: 100vh;
            background-color: black;
            display: flex;
            flex-direction: row;
           }
           .contar{
            width: 90%;
            height: 550px;
            border-radius: 12px;
            padding:20px;
            background-color:olive;
           }
           .contar div{
            width:330px;
            height: 120px;
            border-radius: 12px;
            background-color: red;
            font-size: 33px;
           }
        </style>
    </head>
    <body>
        <div class="contar">
            <div>
                <?php
                $pasta=glob("pasta/*");
                $dados=[];
                foreach($pasta as $arquivo)
                    {
                     array_push($dados,$arquivo);
                    }
                $chave=array_rand($dados);
                echo $dados[$chave];
                ?>
            </div>
        </div>
    </body>
</html>
