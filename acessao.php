<?php
session_start();

// 1. Inicializa como admin se não houver usuário na sessão
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = "admin";
}

// 2. Lógica para processar o clique do botão (POST)
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    if (isset($_POST['nome']) && $_POST['nome'] === 'apagar') {
        // Muda para 'usuario' para que o elemento apareça na tela
        $_SESSION['usuario'] = "usuario";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Correção Sessão</title>
        <style>
            body {
                gap: 30px;
                align-items: center;
                height: 100vh;
                background-color: black;
                justify-content: center;
                margin: 0;
                flex-direction: column;
                display: flex;
            }
            #secao {
                width: 550px;
                font-size: 55px;
                line-height: 120px;
                background-color: lime;
                border-radius: 12px;
                text-align: center;
                height: 250px;
            }
            button {
                font-size: 55px;
                border-radius: 12px;
                background-color: red;
                width: 550px;
                height: 250px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <form method="post" style="display: none;" id="form">
            <input id="nome" name="nome">
        </form>

        <button onclick="ok()">REMOVER</button>

        <?php if ($_SESSION['usuario'] === 'usuario'): ?>
            <div id="secao"><?php echo $_SESSION['usuario']; ?></div>
        <?php endif; ?>

        <script>
            function ok() {
                let dado = 'apagar';
                document.getElementById('nome').value = dado;
                document.getElementById('form').submit();
            }
        </script>
    </body>
</html>
