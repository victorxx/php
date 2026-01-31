<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $titulo = $_POST['titulo'];
    $iframe = $_POST['iframe'];

    if (empty($titulo) || empty($iframe)) {
        echo "<script>alert('Preencha todos os campos!')</script>";
        exit;
    }

    // remover caracteres inválidos para arquivo
    $arquivo =$titulo . ".html";

    if (is_file($arquivo)) {
        echo "<script>alert('O arquivo já existe')</script>";
        exit;
    } else {
        // usar heredoc para string multilinha
        $html = <<<HTML
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>$titulo</title>
    <style>
        body {
            width: 100vh;
            background-color: black;
            color: white;
            text-align: center;
        }
        .desenho {
            width: 100%;
            height: 550px;
            border-radius: 12px;
            text-align: center;
        }
        .desenho iframe {
            width: 100%;
            height: 250px;
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <div class="desenho">
        <h1>$titulo</h1>
        <iframe src="$iframe" allowfullscreen></iframe>
    </div>
</body>
</html>
HTML;

        file_put_contents($arquivo, $html);
        echo "<script>alert('Criado com sucesso')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Vídeo</title>
    <style>
        body {
            background-color: black;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
            width: 90%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
            box-shadow: 0 0 20px blue;
            border-radius: 12px;
        }
        input {
            width: 100%;
            height: 50px;
            font-size: 20px;
            text-align: center;
            border-radius: 8px;
        }
        button {
            width: 100%;
            height: 50px;
            font-size: 20px;
            border-radius: 8px;
            background-color: lime;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="post">
        <input id="titulo" name="titulo" placeholder="Digite o título" required>
        <input id="iframe" name="iframe" placeholder="Digite endereço do vídeo" required>
        <button type="submit">GRAVAR</button>
    </form>
</body>
</html>
