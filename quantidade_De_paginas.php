<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>
            body{
                height: 100vh;
                background-color: black;
                display: flex;
                flex-direction: row;

            }
            .contar{
                width:90%;
                height: 550px;
                border-radius: 12px;
                padding:20px;
                background-color: orangered;
                
            }
            .contar div{
                width:250px;
                height: 110px;
                border-radius: 12px;
                background-color: pink;
                font-size: 33px;
            }
        </style>
    </head>
    <body>
        <div class="contar">
            <div><?php
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
                    echo $quantidade;
                }

            ?></div>
        </div>
    </body>
</html>
