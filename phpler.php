<?php
$conteudo="";
if($_POST){
    $conteudo=$_POST['conteudo'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">

<head>
<style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        form{
            width:80%;
            max-width: 600px;
            margin:20px auto;
            text-align: center;
        }
        textarea{
            width:100%;
            height: 20px;
            font-size: 20px;
            border-radius: 12px;
            padding:20px;
            text-align: center;
        }
        button{
            width:200px;
            height: 100px;
            border-radius: 12px;
            cursor: pointer;
            background-color: red;
            color:white;

        }
        .conteudo{
            display: flex;
            justify-content: center;
            font-size: 20px;
            background-color: orchid;
            padding:20px;
        }
</style>
</head>
<body>
    <form method="post">
<textarea name="conteudo" placeholder="Digite algo"><?php echo htmlspecialchars($conteudo); ?></textarea>
<br>
<button type="submit">Entrar com conteudo</button>

    </form>
    <div class="conteudo">
            <?php
        echo htmlspecialchars($conteudo);
            ?>
    </div>
    <script>
        // Seleciona a div de conteudo
        let conteudo = document.querySelector('.conteudo');

        // Variável de controle para evitar múltiplos alertas
        let alertJaExibido = false;

        // Função global acessível
        function verificarConteudo() {
            if (conteudo.textContent.trim() !== "" ) {
                alert("já preenchido");
                 // garante que o alerta seja exibido apenas uma vez
            }
        }

        // Continua usando setInterval para chamar a função periodicamente
        setInterval(verificarConteudo, 300); // 300ms é suficiente, não precisa de 1ms
    </script>
</body>
</html>
