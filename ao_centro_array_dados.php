<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
        body{
            background-color: black;
            height: 100vh;
            align-items: center;
            display: flex;
            justify-content: center;
            color: white;
        }
        button{
            width:50%;
            height: 250px;
            font-size: 50px;
            border-radius: 12px;
        }
        .resultado{
            width:50%;
            font-size: 30px;
            min-height: 100px;
            text-align: center;
            margin: 20px auto;
            background-color: red;
            padding: 20px;
            border-radius: 12px;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
<form method="post" id="form" name="form" style="display: none;">
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
if(!isset($_SESSION['dado']))
{
    $_SESSION['dado'] = [];
}

if(isset($_POST['nome']))
{
    $dado = $_POST['nome'];
    array_push($_SESSION['dado'], $dado);
}

if(!empty($_SESSION['dado']))
{
    $unico = array_unique($_SESSION['dado']);
    
    echo '<div class="resultado">';
    foreach($unico as $valor) {
        echo ($valor) . '<br>';
    }
    echo '</div>';
}
?>
</body>
</html>
