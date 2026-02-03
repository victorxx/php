<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <form method="post" style="display: none;" id="ok">
        <input type="number" id="numero" name="numero">
    </form>

    <button onclick="iniciar()" style="width:350px; height:250px;background-color:red;border-radius:20px;font-size:33px;">ENVIAR</button>

    <script>
        function iniciar() {
            let valor = prompt('Digite um número:');
            if(valor !== null && valor.trim() !== '') {
                document.getElementById('numero').value = valor;
                document.getElementById('ok').submit(); // Corrigido aqui
            } else {
                alert('Nenhum valor informado!');
            }
        }
    </script>

    <?php
    if($_SERVER["REQUEST_METHOD"] === 'POST') {
        $numero = $_POST['numero'] ;
        if(is_numeric($numero)) {
            echo "<script>alert('ok')</script>";
        }
        $arquivo="dado.txt";
        file_put_contents($arquivo,$numero.PHP_EOL,FILE_APPEND);
        
    }
    ?> 
   
</body>
</html>
