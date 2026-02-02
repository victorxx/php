<?php
session_start(); // importante para usar $_SESSION

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $entrada = $_POST['numero'];

    if (empty(trim($entrada))) {
        echo "<script>alert('O campo está vazio!')</script>";
    } else {
        // transforma string em array (números separados por vírgula)
        $array = explode(",", $entrada);
        // converte cada item para inteiro
        $array = array_map('intval', $array);

        // armazena cumulativamente na sessão
        if (!isset($_SESSION['numeros'])) {
            $_SESSION['numeros'] = [];
        }
        $_SESSION['numeros'] = array_merge($_SESSION['numeros'], $array);

        // soma total
        $soma = array_sum($_SESSION['numeros']);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            margin:0;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            display: flex;
            height: 100vh;
            background-color: black;
        }
        #soma{
            padding:20px;
            width:90%;
            border-radius: 12px;
            font-size: 60px;
            text-align: center;
            background-color: white;
            height: auto;
            max-width: 550px;
            margin-bottom: 20px;
        }
        input{
            width:90%;
            margin-bottom:20px;
            font-size: 50px;
            text-align: center;
            border-radius: 12px;
            height: 120px;
        }
        form{
            width: 90%;
            max-width:660px;
            margin-bottom:20px;
            text-align: center;
            background-color: red;
            padding:20px;
            border-radius: 12px;
        }
        button{
            bottom:20px;
            color:red;
            font-size:90px;
            text-align: center;
            width:550px;
            height: 250px;
            cursor:pointer;
        }
        @media(max-width:900px){
            input, button {
                width: 100%;
                font-size: 32px;
                height: 100px;
            }
        }
    </style>
</head>
<body>
    <?php if(isset($soma)): ?>
        <div id="soma">Soma total: <?= $soma ?></div>
    <?php endif; ?>

    <form method="post">
        <input id="numero" name="numero" placeholder="Digite os numeros (ex: 10,20)">
        <button type="submit">GRAVAR</button>
    </form>
</body>
</html>
