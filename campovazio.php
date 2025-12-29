<?php
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'index';

// valor padrão (evita erro)
$conteudo = '';

switch ($pagina) {
    case 'rica':
        $conteudo = '<iframe width="560" height="315" src="https://www.youtube.com/embed/xzw2eYLTaxI?si=0zQ_qoK5svxbwOU1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
        break;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
body{
    background-color: black;
    text-align: center;
    padding-top: 50px;
    margin: 0;
}
.container{
    color: white;
    background-color: red;
    border-radius: 12px;
    padding: 20px;
    max-width: 600px;
    margin: 0 auto;
}
@media(max-width:550px){
    .container{
        width: 330px;
    }
    .container iframe{
        width: 330px;
        height: auto;
    }
}
</style>
</head>

<body>
<?php
if(!empty($conteudo)):?>
<div class='container'>
    <?php
    echo $conteudo;
    ?>
</div>
<?php endif?>
</body>
</html>
