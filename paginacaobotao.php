<?php
session_start();

// Inicializa contador
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

// Incrementa contador ao clicar
if (isset($_POST['clicado'])) {
    $_SESSION['contador']++;
}

// Pasta e arquivos
$dado = "pasta";
$dados = [];

if (is_dir($dado)) {
    $lendo = glob($dado . "/*.txt");
    foreach ($lendo as $lido) {
        $dados[] = pathinfo($lido, PATHINFO_FILENAME); // só nome
    }
}

// Remove duplicados e reindexa
$unico = array_values(array_unique($dados));

// Garante que o contador não ultrapasse o número de arquivos
$index = $_SESSION['contador'] % count($unico);

// Arquivo atual
$arquivo_atual = $unico[$index];
?>

<!-- Exibe contador -->
<div style="
    width:100%;
    text-align:center;
    font-size:90px;
    top:20%;
    position:absolute;
    background-color:#ff4500;
    border-radius:12px;
">
</div>

<!-- Exibe arquivo atual -->
<div style="
    width:100%;
    text-align:center;
    font-size:90px;
    top:40%;
    position:absolute;
    background-color:#ff4500;
    border-radius:12px;
">
    <?= $arquivo_atual ?>
</div>
<!-- Botão de próximo -->
<form method="post" style="position:absolute; top:70%; width:100%; text-align:center;">
    <button name="clicado" style="
        width:550px;
        height:90px;
        background-color:orange;
        border-radius:12px;
        font-size:30px;
    ">
        PRÓXIMO
    </button>
</form>
