<?php
$pasta="pasta/";
$arquivo=glob($pasta."*");
foreach($arquivo as $arquivo){
    $caminho_completo=realpath($arquivo);
    echo $caminho_completo."<br>";
}
?>
