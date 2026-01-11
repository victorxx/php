<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário com Prompt</title>
</head>
<body>
    <form method="post" id="conteudo" style="display:none;">
        <input type="hidden" name="entrada" id="entrada">
    </form>

    <div id="ok"></div>
    <button type="button" onclick="criar_mensagem()">CRIAR</button>

    <script>
        function criar_mensagem() {
            let ok = prompt('Digite algo:');
            if (ok && ok.trim() !== "") { // verifica se digitou algo
                document.getElementById('entrada').value = ok;
                document.getElementById('ok').innerText = "Você digitou: " + ok; // mostra na tela
                document.getElementById('conteudo').submit();
            } else {
                alert("Nenhum valor digitado!");
            }
        }
    </script>
</body>
<?php
if(isset($_POST['entrada'])){
    $entrada=$_POST['entrada'];
    echo $entrada;
}
?>
</html>
