<?php
$pasta="pasta/teste.txt";
$linhas=file_exists($pasta)?file($pasta,FILE_IGNORE_NEW_LINES):[];

while(count($linhas)<=40){
    $linhas[]="";
}
$linhas[20]="ok";
file_put_contents($pasta,implode("\n",$linhas));
$resultado="foi";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<style>
            body{
                margin:0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }
            .conteudo{
                width:550px;
                height: 250px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 55px;
                box-shadow: 10px 20px 30px purple;
                border-radius: 12px;
                text-align: center;
            }
            @media(max-width:550px){
                .conteudo{
                    width:250px;
                    height: 440px;
                    font-size: 60px;
                }
            }
</style>
</head>
<body>
<div class="conteudo">
        <?php
        echo $resultado;
        ?>
</div>
</body>
</html>
