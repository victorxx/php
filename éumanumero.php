<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Validação Numérica</title>
</head>

<body>

    <form method="post" id="ok" style="display: none;">
        <input type="number" id="numero" name="numero">
    </form>

    <button 
        onclick="iniciar()" 
        style="width:350px;height:250px;background-color:red;border-radius:20px;font-size:50px;">
        ENVIAR
    </button>

    <script>
        function iniciar() {
            let iniciar = prompt('iniciar');
            document.getElementById('numero').value = iniciar;
            document.getElementById('ok').submit();
        }
    </script>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $numero = $_POST['numero'];

            if (is_numeric($numero)) {
                echo "<script>alert('foi digitado um número');</script>";
                exit;
            }
        }
    ?>

</body>
</html>
