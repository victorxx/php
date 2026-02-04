<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>
            body {
                background: #222;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 80px;
            }

            .personagem {
                width: 80px;
                height: 120px;
                background: #4caf50;
                position: relative;
                transition: transform 0.2s;
            }

            .inimigo {
                background: #f44336;
            }

            button {
                position: absolute;
                bottom: 40px;
                font-size: 18px;
                padding: 10px 20px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="personagem" id="heroi"></div>
        <div class="personagem inimigo" id="inimigo"></div>
        <button onclick="socar()">SOCAR</button>
        <script>
            const heroi=document.getElementById('heroi');
            const inimigo=document.getElementById('inimigo');

            function socar()
            {
                heroi.style.transform="translateX(30px)";
                inimigo.style.transform="translateX(60px) rotate(10deg)";
                setTimeout(()=>{
                inimigo.transform="translateX(0)";
                inimigo.style.transform="translateX(0) rotate(0)";
                },200);
            }
        </script>
    </body>
</html>
