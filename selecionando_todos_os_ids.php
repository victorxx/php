<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Propaganda</title>
    <style>
        body {
            background-color: black;
            height: 100vh;
        }

        .propaganda {
            width: 330px;
            height: 110px;
            position: fixed;
            border-radius: 12px;
            font-size: 55px;
            background-color: lime;
        }

        .fechar {
            width: 100px;
            height: 100px;
            position: fixed;
            cursor: pointer;
            text-align: center;
            font-size: 90px;
            background-color: red;
            border-radius: 12px;
            z-index: 100000;
        }

        .invisivel {
            width: 330px;
            height: 110px;
            position: fixed;
            z-index: 10001;
            background-color: lime;
        }
    </style>
</head>
<body>

    <div class="fechar" id="1" onclick="ok()">x</div>
    <div class="invisivel" id="1"></div>
    <div class="propaganda" id="1"></div>
    <script>
        function ok()
        {
            const grupo1=document.querySelectorAll('[id="1"]');
            grupo1.forEach(elemento=>{
            elemento.style.display='none';
            });
        }
    </script>

  

</body>
</html>
