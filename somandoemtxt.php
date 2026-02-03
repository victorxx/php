<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <style>
        body {
            height: 100vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: purple;
        }
    </style>
</head>
<body>

<form method="post" style="display: none;" id="form">
    <input type="number" id="numero" name="numero">
</form>

<button onclick="iniciar()" style="font-size:55px;width:440px;height:330px; background-color: red; text-align: center;">
    CALCULAR
</button>

<script>
    function iniciar() {
        let valor = prompt('Digite um número');
        if(valor !== null && valor.trim() !== '') {
            document.getElementById('numero').value = valor; // corrigido id
            document.getElementById('form').submit();
        } else {
            alert('Nenhum valor informado!');
        }
    }
</script>

</body>

<?php
if($_SERVER["REQUEST_METHOD"]==='POST')
    {
    $numero=$_POST['numero'];
    $arquivo="dado.txt";
    if(is_numeric($numero))
        {
            file_put_contents($arquivo,$numero.PHP_EOL,FILE_APPEND);
            echo "<script>alert('Número adicionado com sucesso')</script>";

            $linhas=file($arquivo,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
            $soma=0;
            foreach($linhas as $li)
                {
                 if(is_numeric($li))
                    {
                        $soma+=floatval($li);
                        
                    }
                }
            echo "<h2>ok resultado $soma</h2>";
        }
    }
?>
</html>
