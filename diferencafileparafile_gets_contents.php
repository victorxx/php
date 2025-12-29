<?php
$arquivo='ok.txt';
$pasta='pasta';
$juntar=$pasta.'/'.$arquivo;
if(file_exists($juntar)){
    echo 'ok<br>';

    $linhas=file($juntar);
    foreach($linhas as $linha){
        echo $linha.'<br>';
    }
}else{
    echo 'arquivo não encontrado';
}
?>

<?php
$pasta = 'pasta';
$arquivo = 'ok.txt';
$juntar = $pasta . '/' . $arquivo;

if (file_exists($juntar)) {
    echo 'ok<br>';

    // file_get_contents() lê todo o arquivo como uma única string
    $conteudo = file_get_contents($juntar);

    // nl2br() converte quebras de linha (\n) em <br> para exibir no HTML
    echo nl2br($conteudo);
} else {
    echo 'Arquivo nao encontrado';
}
?>
