<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
    body{
        height: 100vh;
        background-color: black;
        align-items: center;
        justify-content: center;
        display: flex;
    }
    form{
        width:89%;
        max-width: 660px;
        height: 250px;
        justify-content: space-around;
        flex-direction: column;
        padding:20px;
        display: flex;
        box-shadow: 10px 10px lime;
        border-radius: 12px;
    }
    input{
        width:90%;
        border:none;

        color:black;
        box-shadow: 10px 10px lime;
        font-size: 33px;
        padding:20px;
        text-align: center;
    }
    button{
        cursor:pointer;
        font-size: 55px;
        border-radius: 12px;
        width:100%;
        height: 90px;
        border:none;
    }
</style>
<body>
    <form method="post">
        <input id="linha" name="linha" placeholder="Digite a linha">
        <input id="arquivo" name="arquivo" placeholder="Digite o nome do arquivo">
        <button type="submit">GRAVAR</button>
    </form>
</body>
<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $linha   = (int) $_POST['linha'];
    $arquivo = trim($_POST['arquivo']);

    if (empty($arquivo) || $linha <= 0) {
        echo "<script>alert('campos vazios')</script>";
        exit;
    }

    $escrever = fopen($arquivo . ".txt", "w");

    for ($i = 0; $i < $linha; $i++) {
        if ($i < 9) {
            fwrite($escrever, PHP_EOL);
        } 
        else if ($i == 9) {
            fwrite($escrever, "dolar" . PHP_EOL);
            break;
        }
    }

    fclose($escrever); // ✅ agora no lugar certo
    echo "<script>alert('finalizado com sucesso')</script>";
}
?>
</html>
