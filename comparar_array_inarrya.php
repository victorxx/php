<?php
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'index';
$arquivo = "pasta/";
$mudar = [];

if (is_dir($arquivo)) {
    $lido = glob($arquivo . "*"); // pega todos os arquivos da pasta
    foreach ($lido as $lendo) {
        $mudar[] = $lendo; // adiciona no array
    }

    // Remove "pasta/" e ".txt" de todos os arquivos
    $mudando = str_replace(["pasta/", ".txt"], "", $mudar);

    // Verifica se $_GET['pagina'] existe no array
    if (in_array($pagina, $mudando)) {
        echo $pagina; // mostra a página que bateu
    } else {
        echo "Arquivo não encontrado";
    }
}
?>
