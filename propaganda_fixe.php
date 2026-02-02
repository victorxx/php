<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body onload="verificar()">

    <!-- Botão fechar -->
    <div class="fechar"
         style="width:100px;
                cursor:pointer;
                height:100px;
                font-size:70px;
                background-color:red;
                text-align:center;
                line-height:100px;
                color:white;
                z-index:1000000;
                position:fixed;
                top:10px;
                left:500px;"
         onclick="ok()">
        ×
    </div>

    <!-- Área clicável -->
    <div class="entrar"
         style="width:35%;
                position:fixed;
                height:440px;
                cursor:pointer;
                background-color:orchid;
                opacity:0;
                z-index:10000;"
         onclick="window.location.href='https://www.larissasaib.com.br/'">
    </div>

    <!-- Propaganda -->
    <div class="propaganda"
         style="width:30%;
                height:300px;
                background-color:orangered;
                top:20px;
                left:20px;
                display:flex;
                justify-content:center;
                align-items:center;
                position:fixed;
                overflow:hidden;
                border-radius:12px;">

        <span style="font-size:136%;
                     z-index:2;
                     text-align:center;
                     color:white;
                     top:30px;
                     font-weight:bold;
                     text-shadow:1px 1px 6px rgba(0,0,0,0.6);
                     position:relative;">
            Dra. Larissa Saib<br>
            Especialista em Medicina Capilar<br>
            <small>Agende sua avaliação</small>
        </span>

        <img src="https://static.wixstatic.com/media/1e79c0_8253c88f6c5b44fbb4e43bc5e58e1902~mv2.png/v1/fill/w_475,h_824,al_c,q_90,usm_0.66_1.00_0.01,enc_avif,quality_auto/Design%20sem%20nome%20(9).png"
             style="width:100%;
                    height:100%;
                    position:absolute;
                    top:0;
                    left:0;">
    </div>

    <script>
        function ok() {
            document.querySelector('.propaganda').style.display = 'none';
            document.querySelector('.entrar').style.display = 'none';
            document.querySelector('.fechar').style.display = 'none';
            document.cookie = "larissa=ok;path=/;max-age=" + (24 * 60 * 60);
        }

        function verificar() {
            let cookies = document.cookie.split(';');

            for (let i = 0; i < cookies.length; i++) {
                let cookie = cookies[i].trim();

                if (cookie.startsWith('larissa=ok')) {
                    document.querySelector('.propaganda').style.display = 'none';
                    document.querySelector('.entrar').style.display = 'none';
                    document.querySelector('.fechar').style.display = 'none';
                }
            }
        }
        verificar();
    </script>

</body>
</html>
