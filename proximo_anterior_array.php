<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
    button{
        width:auto;
        height: auto;
        padding:20px;
        border-radius: 12px;
        box-shadow: 10px 10px 10px purple;
        font-size: 33px;
        cursor:pointer;
        padding:20px;
        box-shadow: 10px 10px 10px purple;
        text-align: center;
        
    }
</style>
</head>
<body>
<form method="post">
<button name="proximo" value="proximo">PROXIMO</button>
<button name="anterior" value="anterior">VOLTAR</button>
</form>
</body>
<?php
session_start();

$alunos = ['marcelo', 'tiago', 'gustavo', 'marcos'];

// Inicializa contador
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

// Botão próximo
if (isset($_POST['proximo'])) {
    $_SESSION['contador']++;
    if ($_SESSION['contador'] >= count($alunos)) {
        $_SESSION['contador'] = 0; // volta ao primeiro aluno
    }
}

// Botão anterior
if (isset($_POST['anterior'])) {
    $_SESSION['contador']--;
    if ($_SESSION['contador'] < 0) {
        $_SESSION['contador'] = count($alunos) - 1; // volta ao último aluno
    }
}

// Mostra o aluno atual
$imprimir = $alunos[$_SESSION['contador']];
echo $imprimir;
?>

</html>
