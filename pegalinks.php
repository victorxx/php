<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Teste de Links</title>
</head>
<body>
    <h1>Página de Teste de Links</h1>

    <!-- Links de exemplo -->
    <a href="https://www.google.com">Google</a><br>
    <a href="https://www.youtube.com">YouTube</a><br>
    <a href="https://www.php.net">PHP</a><br>
    <a href="https://www.example.com">Example</a><br>

</body>

  <?php
// Caminho do arquivo HTML (pode ser local ou URL)
$arquivo = 'file:///C:/Users/vitor/Desktop/pagina.html'; // ou 'https://www.seusite.com/pagina.html'

// lê o conteúdo do arquivo
$conteudo = file_get_contents($arquivo);

// explode pelo href="
$partes = explode('href="', $conteudo);

// percorre as partes e pega apenas as URLs
echo "<h2>Links encontrados:</h2><ul>";
foreach ($partes as $i => $parte) {
    if ($i == 0) continue; // a primeira parte não contém link
    $link = explode('"', $parte)[0]; // pega até a próxima aspas
    echo "<li><a href='$link' target='_blank'>$link</a></li>";
}
echo "</ul>";
?>

  
</html>
