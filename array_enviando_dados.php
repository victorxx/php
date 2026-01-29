<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
        body{
            background-color: black;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color:white;
        }
        button{
            width:50%;
            height: 250px;
            font-size: 55px;
            border-radius: 12px;
            margin-bottom: 20px;
        }
        .resultado{
            width:50%;
            font-size: 40px;
            min-height: 100px;
            text-align: center;
            background-color: red;
            word-wrap: break-word;
            padding:20px;
            border-radius: 12px;
        }
    </style>
</head>
<body>
<form method="post" id="form" style="display: none;">
    <input type="text" id="nome" name="nome" placeholder="digite algo">
</form>

<button onclick="ok()">COMECAR</button>

<script>
    function ok()
    {
        let entrada = prompt('Digite algo');
        if(entrada !== null)
        {
            document.getElementById('nome').value = entrada;
            document.getElementById('form').submit();
        }
    }
</script>

<?php
session_start();

if(!isset($_SESSION['dado'])) {
    $_SESSION['dado'] = [];
}

if(isset($_POST['nome'])) {
    $dado = $_POST['nome'];
    array_push($_SESSION['dado'], $dado); // ✅ Corrigido
}

if(!empty($_SESSION['dado'])) {
    $unico = array_unique($_SESSION['dado']);
    echo '<div class="resultado">';
    foreach($unico as $valor){
        echo htmlspecialchars($valor) . '<br>'; // segurança
    }
    echo '</div>';
}
?>
</body>
</html>
