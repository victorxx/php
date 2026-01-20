<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body{
            background-color: black;
            height: 100vh;
            display: flex;
            align-items: center;
            color:white;
            justify-content: center;
        }
        form{
            width: 90%;
            max-width: 550px;
            box-shadow: 10px 10px purple;
            padding:20px;
            border-radius: 12px;
            background-color: yellow;
        }
        input,textarea{
            width:90%;
            margin: 10px;
            padding:20px;
            font-size: 33px;
            border-radius: 12px;
            border:none;
        }
        button{
            width:120px;
            height: 50px;
            box-shadow: 10px 10px purple;
            border-radius: 12px;
            border:none;
            cursor: pointer;
            font-size: 22px;
        }
    </style>
</head>
<body>
<form method="post">
    <input type="text" name="titulo" placeholder="Digite seu título">
    <br>
    <input type="number" name="quantidade" placeholder="Qual linha você quer escrever?">
    <br>
    <input type="text" name="conteudo" placeholder="Conteúdo completo">
    <br>
    <button type="submit">GRAVAR</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] === 'POST') {
    $titulo = trim($_POST['titulo']);
    $quantidade = trim($_POST['quantidade']);
    $conteudo = trim($_POST['conteudo']);

    if(empty($titulo) || empty($quantidade) || empty($conteudo)) {
        echo "<script>alert('Os campos estão vazios')</script>";
        exit;
    }

    $pasta = "pasta/";
    if(!is_dir($pasta)) {
        mkdir($pasta, 0777);
    }

    $completo = $pasta.$titulo.".txt";

    if(!file_exists($completo)) {
        file_put_contents($completo, "");
    }

    $linhas = file($completo);
    while(count($linhas) < $quantidade) {
        $linhas[] = " ";
    }

    $linhas[$quantidade - 1] = $conteudo;

    file_put_contents($completo, implode("\n", $linhas));
    echo "<script>alert('Arquivo atualizado/criado com sucesso!')</script>";
}
?>
</body>
</html>
