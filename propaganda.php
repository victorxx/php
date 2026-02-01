<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body{
            background-color: black;
            height: 100vh;
        }
        .propaganda{
            width:330px;
            position:fixed;
            background-color:lime;
            font-size: 55px;
            border-radius: 12px;
            height: 120px;
        }
        .fechar{
            width:100px;
            height: 100px;
            position:fixed;
            cursor: pointer;
            text-align: center;
            font-size: 90px;
            background-color: red;
            z-index:1000000;
        }
        .invisivel{
            width:330px;
            position:fixed;
            background-color: purple;
            z-index: 10000;
            height: 110px;
        }
    </style>
</head>
<body>

<div class="fechar" onclick="fechar()">x</div>
<div class="invisivel"></div>
<div class="propaganda">victor</div>

<script>
function fechar() {
    // Cria cookie válido por 1 dia
    document.cookie = "vitor=ok; path=/; max-age=" + (24*60*60);
    esconder();
}

function esconder() {
    document.querySelector('.fechar').style.display = 'none';
    document.querySelector('.propaganda').style.display = 'none';
    document.querySelector('.invisivel').style.display = 'none';
}

function verificar() {
    let cookies = document.cookie.split(';');
    for(let i = 0; i < cookies.length; i++) {
        let cookie = cookies[i].trim();
        if(cookie === "vitor=ok") {
            esconder();
        }
    }
}

// Verifica cookie ao carregar a página
verificar();
</script>

</body>
</html>
