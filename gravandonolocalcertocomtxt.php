<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Cadastro</title>
<style>
    form{
        width:100%;
        background-color: orange;
        padding:20px;
        text-align: center;
        border-radius: 12px;
        box-shadow:30px 20px 20px purple;
        font-size: 33px;
        overflow: hidden;
    }
    form input{
        width:90%;
        height: 150px;
        padding:20px;
        text-align: center;
        font-size: 33px;
        box-shadow: 10px 10px 20px purple;
        border-radius: 12px;
    }
    button{
        width:40%;
        height: 50px;
        padding:20px;
        text-align: center;
        border-radius: 12px;
        box-shadow: 10px 10px orchid;
    }
    select{
        width:90%;
        height: 110px;
        border-radius: 20px;
        padding:20px;
        text-align: center;
        box-shadow: 10px 10px 10px pink;
        font-size: 33px;
    }
</style>
</head>
<body>

<form method="post">
    <input type="number" placeholder="digite um valor" name="numero" required>
    <br><br>
    <input type="text" placeholder="digite o nome" name="nome" required>
    <br><br>
    <select name="opcao" required>
        <option value="vender">VENDER</option>
        <option value="alugar">ALUGAR</option>
    </select>
    <br><br>
    <button type="submit">ENVIAR</button>
</form>

<?php
$arquivo="pasta/imovel.txt";
// Cria a pasta e o arquivo se não existirem
if(!is_dir("pasta")){
    mkdir("pasta", 0777, true);
}
if(!file_exists($arquivo)){
    file_put_contents($arquivo,"");
}
if(file_exists($arquivo)){
    file_put_contents($arquivo,"");
}

// Grava os dados quando o formulário for enviado
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome   = $_POST['nome'];
    $numero = $_POST['numero'];
    $opcao  = $_POST['opcao'];

    // Corrigido: grava corretamente $opcao
    $conteudo  = "Nome:$nome\n";
    $conteudo .= "Numero:$numero\n";
    $conteudo .= "Opção:$opcao\n";

    file_put_contents($arquivo, $conteudo, FILE_APPEND);

    echo "<script>alert('ok')</script>";
}
?>
</body>
</html>
