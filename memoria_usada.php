<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
        .informacao {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            text-align: center;
        }
        .informacao div {
            background-color: orange;
            font-size: 30px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
    </style>
</head>

<body>
    <div class="informacao">
        <?php
            $memoria_usada = memory_get_usage();
            $calculo_memoria = $memoria_usada / (1024 * 1024);
            $memoria_formatada = number_format($calculo_memoria, 2);
            echo "<div>A memória usada na máquina nesse momento é $memoria_formatada MB</div>";
        ?>
    </div>
</body>
</html>
