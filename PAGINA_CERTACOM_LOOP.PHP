<?php
$dado = [];
$pagina = [];
$pasta = "pasta/";

// Pega todos os arquivos da pasta
$arquivos = glob($pasta . "*");

// Verifica qual página foi passada via GET, se não passar, vai para 'index'
$navegacao = isset($_GET['pagina']) ? $_GET['pagina'] : 'index';

// Preenche o array $pagina com o nome das páginas (sem "pasta/" e ".txt")
foreach ($arquivos as $arquivo) {
    $dado[] = $arquivo;
    // Remove 'pasta/' e '.txt' para deixar o nome da página
    $pagina[] = str_replace(["pasta/", ".txt"], "", $arquivo);
}

// Se a navegação não for 'index', tenta encontrar a página
if ($navegacao !== "index") {
    foreach ($pagina as $paginas) {
        if ($paginas == $navegacao) {
            echo "Estamos na página: " . $navegacao;
        }
    }
}
?>
