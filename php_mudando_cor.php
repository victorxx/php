<?php
$cor_fundo = 'blue';
$cor_texto = 'darkblue';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo CSS com PHP</title>
    <style>
        body {
            background-color: <?= $cor_fundo ?>;
            color: <?= $cor_texto ?>;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <p>A cor de fundo é <?= $cor_fundo ?> e a cor do texto é <?= $cor_texto ?>.</p>
</body>
</html>
