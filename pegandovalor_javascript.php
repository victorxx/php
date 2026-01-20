<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário Invisível</title>
</head>
<body>
    <form method="post" id="meuForm">
        <input type="hidden" name="nome" id="nome">
    </form>
    <button onclick="criar()">CRIAR MENSAGEM</button>

    <script>
        function criar()
        {
                let nome = prompt('Digite seu nome:');
                // Atribui o valor ao campo oculto
                document.getElementById('nome').value = nome;
                // Submete o formulário automaticamente
                document.getElementById('meuForm').submit();
        }
        // Pergunta o nome do usuário
       
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        // Recebe o valor enviado pelo input hidden
        $nome = $_POST['nome'] ?? '';
        echo "<script>alert('Nome recebido: " . addslashes($nome) . "');</script>";
    }
    ?>
</body>
</html>
