<?php
$numero_recebido = null;
if (isset($_POST['numero'])) {
    $numero_recebido = $_POST['numero'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>JS para PHP na mesma página</title>
</head>
<body>
    <button onclick="enviar()">ENVIAR</button>

    <!-- Formulário invisível -->
    <form id="invisivel" method="post" style="display: none;">
        <input type="hidden" name="numero" id="numero">
    </form>

    <div id="resultado">
        <?php
        if ($numero_recebido !== null) {
            echo $numero_recebido;
        }
        ?>
    </div>

    <script>
        function enviar() {
            let numero = 43;
            document.getElementById('numero').value = numero;
            document.getElementById('invisivel').submit();
        }
    </script>
</body>
</html>
