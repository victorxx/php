<?php
// Verifica se o parâmetro 'abrir' existe na URL
$abrir=isset($_GET['abrir']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <style>
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 255, 255, 0.5); /* Aqua semi-transparente */
        }
        .caixa {
            background-color: white;
            width: 200px;
            padding: 20px;
            margin: 100px auto;
            text-align: center;
        }
    </style>
</head>
<body>

<a href="?abrir=1">Abrir modal</a>

    <?php if($abrir):?>
    <div class="modal" style="display: block;">
        <div class="caixa">
            <p>Olá!</p>
        </div>
    </div>
    <?php endif?>
    


</body>
</html>
