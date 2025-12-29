<?php
// Página atual
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'index';

// Padrões
$titulo = 'Página Principal';
$descricao = 'Bem-vindo ao site';
$conteudo = '';

// Controle de conteúdo
switch ($pagina) {

    case 'surtando-codigo-ifood':
        $titulo = 'RICA GAMES SURTANDO POR NÃO SABER O CÓDIGO DO IFOOD';
        $descricao = 'Rica Games surtando em live por causa do código do iFood.';
        $conteudo = '<iframe width="560" height="315"
            src="https://www.youtube.com/embed/UyjQlWa3ZZA"
            frameborder="0" allowfullscreen></iframe>';
        break;

    case 'rica-games-tecada':
        $titulo = 'RICA GAMES TECADA EM LIVE';
        $descricao = 'Rica Games tecando em live com gameplay insano.';
        $conteudo = '<iframe width="560" height="315"
            src="https://www.youtube.com/embed/PeZ-TDD67yY"
            frameborder="0" allowfullscreen></iframe>';
        break;

    case 'surto-apos-falar-de-bon-jovi':
        $titulo = 'Rica Games entra em surto após falar de Bon Jovi';
        $descricao = 'Momento inesperado do Rica Games falando de Bon Jovi.';
        $conteudo = '<iframe width="560" height="315"
            src="https://www.youtube.com/embed/yp6JKW-XPes"
            frameborder="0" allowfullscreen></iframe>';
        break;

    case 'index':
        // mantém padrão
        break;

    default:
        $titulo = 'Erro 404';
        $descricao = 'Página não encontrada';
        $conteudo = '<p style="color:white;">Conteúdo não encontrado.</p>';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $titulo ?></title>

<meta property="og:title" content="<?= $titulo ?>">
<meta property="og:description" content="<?= $descricao ?>">
<meta property="og:image" content="https://raw.githubusercontent.com/victorxx/tump/refs/heads/main/ricagames.jpeg">

<style>
body {
    background: black;
    font-family: Arial, sans-serif;
    text-align: center;
    padding-top: 40px;
    margin: 0;
}
h1 {
    color: white;
    margin-bottom: 30px;
}
.button-container {
    position: relative;
    display: inline-block;
    margin-bottom: 40px;
}
#mao {
    position: absolute;
    top: -30px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
}
#mao img {
    width: 100%;
}
button {
    background: none;
    border: none;
    cursor: pointer;
}
button img {
    width: 220px;
}
.container {
    width: 440px;
    margin: 0 auto 40px auto;
    background: orchid;
    border-radius: 12px;
    padding: 10px;
}
iframe {
    max-width: 100%;
}
@media (max-width: 550px) {
    .container {
        width: 90%;
    }
}
</style>
</head>
<body>

<h1><?= $titulo ?></h1>

<div class="button-container">
    <button onclick="location.href='https://www.espiritosanto-es.com.br/produtos/sony.html'">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Playstation_logo_colour.svg" alt="PlayStation">
    </button>
    <div id="mao">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Mano_cursor.svg/960px-Mano_cursor.svg.png" alt="Mão">
    </div>
</div>

<?php if ($conteudo): ?>
<div class="container">
    <?= $conteudo ?>
</div>
<?php endif; ?>

</body>
</html>
