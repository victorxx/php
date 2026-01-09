<?php
$arquivo = "pasta/imovel.txt";

if(file_exists($arquivo)){
    // lê todas as linhas do arquivo, sem espaços em branco
    $linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // inicializa variáveis
    $nome   = "";
    $numero = "";
    $opcao  = "";

    // percorre cada linha e pega o valor
    foreach($linhas as $linha){
        $linha = trim($linha); // remove espaços extras
        if(strpos($linha, "Nome:") === 0){
            $nome = str_replace("Nome:", "", $linha);
        }
        elseif(strpos($linha, "Numero:") === 0){
            $numero = str_replace("Numero:", "", $linha);
        }
        elseif(strpos($linha, "Opção:") === 0){
            $opcao = str_replace("Opção:", "", $linha);
        }
    }

    // Agora você pode tomar decisões
    if($opcao == "vender"){
        echo "O imóvel de $nome, no valor de $numero, está disponível para venda.";
    }
    elseif($opcao == "alugar"){
        echo "O imóvel de $nome, no valor de $numero, está disponível para aluguel.";
    }
    else{
        echo "Não foi possível identificar a opção do imóvel.";
    }

} else {
    echo "Arquivo não encontrado.";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
<meta charset="utf-8">
<title>cadastro</title>
<style>
        form{
            width:100%;
            background-color: purple;
            padding:20px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 10px 10px 10px peru;
            font-size: 30px;
            overflow: hidden;
        }
        form input{
            width:90%;
            height: 150px;
            padding:20px;
            text-align: center;
            font-size: 30px;
            padding:20px;
            border-radius: 10px;
            box-shadow: 10px 10px 10px purple;
        }
        button{
            width:40%;
            height: 90px;
            font-size: 30px;
            text-align: center;
            overflow: hidden;
            box-shadow: 10px 10px 10px red;
            border-radius: 12px;
        }
        select{
            width:90%;
            height: 120px;
            border-radius: 12px;
            box-shadow: 10px 10px 10px purple;
        }
</style>
</head>
<body>
<form method="post">
<input type="text" name="nome" placeholder="digite nome imovel">
<br>
<br>
<input type="number" name="numero" placeholder="digite quantidade">
<br>
<br>
<select name="opcao">
    <option value="vender">Vender</option>
    <option value="Alugar">Alugar</option>
    <option value="comprar">Comprar</option>
</select>
<button type="submit">ENTRAR</button>
</form>
<?php
$arquivo="pasta/imovel.txt";
if(!file_exists($arquivo)){
    file_put_contents($arquivo,"");
}else{
    file_put_contents($arquivo,"");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome=$_POST['post'];
    $numero=$_POST['numero'];
    $opcao=$_POST['opcao'];

    $conteudo="Nome:$nome\n";
    $conteudo.="Numero:$numero\n";
    $conteudo.="Opção:$opcao\n";

    file_put_contents($arquivo,$conteudo,FILE_APPEND);
    echo"<script>alert('ok')</script>";
}
?>
</body>
</html>
