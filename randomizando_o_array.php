<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>
            body{
                height: 100vh;
                background-color: royalblue;
                display: flex;
                flex-direction: column;
            }
            .contar{
                width: 90%;
                height: 550px;
                border-radius: 12px;
                padding:20px;
                background-color: orange;
            }
            .contar div{
                width:250px;
                height: 110px;
                border-radius: 12px;
                background-color: blueviolet;
                font-size: 34px;
            }
        </style>
    </head>
    <body>
        <div class="contar">
            <?php
            $pasta="pasta/";
            if(!is_dir($pasta))
                {
                    mkdir($pasta,0777,true);
                }
            $paginas=[];
            if(is_dir($pasta))

                {
                    $arquivos=glob($pasta."*");
                    foreach($arquivos as $arquivo)
                        {
                            array_push($paginas,$arquivo);

                        }
                    $quantidade=count($paginas);
                    $randomizar=rand(0,$quantidade);
                    echo $paginas[$randomizar];
                }
            ?>
        </div>
    </body>
</html>
