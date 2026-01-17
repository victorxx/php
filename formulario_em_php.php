<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>formulario</title>
    <style>
        body{
            margin:0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
        }
        form{
            width:90%;
            max-width:550px;
            padding:20px;
            border-radius: 12px;
            box-shadow: 10px 10px purple;
            background-color: red;
        }
        input,textarea{
            width:90%;
            height: 50px;
            border-radius: 12px;
            margin-bottom:20px;
            padding:20px;
            font-size: 20px;
        }
        textarea{height: 120px;}
        button{
            width:150px;
            height: 120px;
            font-size: 20px;
            border:none;
            cursor:pointer;
            border-radius: 12px;
        }
    </style>
</head>
<body>
<form method="post">
    <input name="titulo" placeholder="Digite o titulo">
    <br>
    <textarea name="texto" placeholder="Digite um texto"></textarea>
    <button type="submit">GRAVAR</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]==="POST") {
    $titulo = trim($_POST['titulo']);
    $texto  = trim($_POST['texto']);

    if(empty($titulo) || empty($texto)) {
        echo "<script>alert('vazio os campos')</script>";
        exit;
    }

    $pasta = "pasta/";
    if(!is_dir($pasta)) {
        mkdir($pasta, 0777, true);
    }

    $nome_arquivo = $pasta . $titulo . ".txt";

    if(file_exists($nome_arquivo)) {
        echo "<script>alert('já existe tente outro')</script>";
        exit;
    }

    $conteudo = $titulo . "\n";
    $conteudo .= $texto . "\n";

    file_put_contents($nome_arquivo, $conteudo);

    echo "<script>alert('Arquivo criado com sucesso')</script>";
}
?>
</body>
</html>
