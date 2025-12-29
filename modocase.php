<?php
// Determina a página atual
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'index';

// Define título, descrição e conteúdo baseado na página
switch($pagina) {
    case 'rica-games-tecada':
        $titulo = 'RICA GAMES TECADA EM LIVE';
        $descricao = 'Rica Games teca em live com gameplay incrível.';
        $conteudo = '<iframe width="560" height="315" src="https://www.youtube.com/embed/PeZ-TDD67yY?si=Xl0w6PcDWlYrYOY-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
        break;

    case 'surto-apos-falar-de-Bon-Jovi':
        $titulo = 'Rica Games entra em modo de surto após falar de Bon Jovi';
        $descricao = 'Rica Games reage de forma inusitada ao falar de Bon Jovi.';
        $conteudo = '<iframe width="560" height="315" src="https://www.youtube.com/embed/yp6JKW-XPes?si=ftzx7961kZu7ycKi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
        break;

    case 'index':
        $titulo = 'Página Principal';
        $descricao = 'Bem-vindo à página principal.';
        $conteudo = '';
        break;

    default:
        $titulo = 'Erro';
        $descricao = 'Tente novamente, deu algo errado.';
        $conteudo = 'Tente novamente, deu algo errado';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta property="og:title" content="<?php echo $titulo; ?>">
<meta property="og:description" content="<?php echo $descricao; ?>">
<meta property="og:image" content="data:image/jpeg;base64,...">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $titulo; ?></title>
<style>
body {
    background-color: black;
    font-family: Arial, sans-serif;
    text-align: center;
    padding-top: 50px;
    margin: 0;
}
h1 { color: white; margin-bottom: 40px; }
.button-container { position: relative; display: inline-block; margin-bottom: 50px; }
#mao { position: absolute; top: -30px; left: 50%; transform: translateX(-50%); width: 80px; height: 80px; z-index: 10; }
#mao img { width: 100%; height: 100%; }
button { background: transparent; border: none; cursor: pointer; padding: 0; }
button img { width: 220px; height: auto; }
.container {
    width: 440px;
    height: 250px;
    margin: 0 auto 50px auto;
    background-color: orchid;
    border-radius: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-size: 24px;
}
@media(max-width:550px){
    .container { width: 90%; height: auto; }
}
</style>
</head>
<body>

<h1><?php echo $titulo; ?></h1>

<div class="button-container">
    <button onclick="window.location.href='https://www.espiritosanto-es.com.br/produtos/sony.html'">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Playstation_logo_colour.svg" alt="PlayStation">
    </button>
    <div id="mao">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Mano_cursor.svg/960px-Mano_cursor.svg.png" alt="Mãozinha">
    </div>
</div>

<?php if(!empty($conteudo)): ?>
<div class="container">
    <?php echo $conteudo; ?>
</div>
<?php endif; ?>

</body>
</html>
