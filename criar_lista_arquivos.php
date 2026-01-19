<?php
$dados = [];
$pagina = [];
$pasta = "pasta/"; // caminho da pasta

// Pega todos os arquivos .txt na pasta
$arquivos = glob($pasta . "*.txt");

// Página selecionada via URL ?pagina=nome
$navegacao = isset($_GET['pagina']) ? $_GET['pagina'] : 'index';

// Preenche arrays de dados e páginas
foreach($arquivos as $arquivo) {
    $dados[] = $arquivo;
    $pagina[] = str_replace([$pasta, ".txt"], "", $arquivo);
}

// Se não for a página inicial
if($navegacao !== "index") {
    $arquivo_selecionado = "";

    foreach($pagina as $paginas) {
        if($paginas == $navegacao) {
            $arquivo_selecionado = $pasta . $paginas . ".txt";
            break; // achou a página, não precisa continuar
        }
    }

    if($arquivo_selecionado && file_exists($arquivo_selecionado)) {
        $lendo = file_get_contents($arquivo_selecionado);
        echo $lendo;
    } else {
        echo "Não existe, favor entrar em outra página.";
    }
} else {
    echo "Página inicial";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>
            body{
                background-color: black;
                color:white;
                font-family: Arial, Helvetica, sans-serif;
                padding:20px;
                text-align: center;
            }
            form{
                width:90%;
                max-width: 500px;
                margin:0 auto;
                padding:20px;
                border-radius: 12px;
                box-shadow: 10px 10px 10px purple;
                background-color: purple;
            }
            input,textarea{
                width:90%;
                margin-bottom:20px;
                padding:20px;
                font-size: 30px;
                border-radius: 12px;
                border:none;
                box-shadow: 3px 3px purple;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            textarea{
                height: 200px;
            }
            button{
                width:200px;
                height: 50px;
                border:none;
                cursor:pointer;
                box-shadow: 10px 10px purple;
                color:white;
                border-radius: 12px;
            }
        </style>
    </head>
    <body>
    <form method="post">
        <input name="titulo" placeholder="Digite um titulo" required>
        <textarea name="conteudo" placeholder="Digite o valor de um conteudo" required></textarea>
        <br>
        <button type="submit">GRAVAR</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Pegando os valores do formulário
        $titulo = trim($_POST['titulo']);
        $texto = trim($_POST['conteudo']);
        
        // Verificando se os campos não estão vazios
        if (empty($titulo) || empty($texto)) {
            echo "<script>alert('Campos vazios!')</script>";
            exit;
        }
        
        // Sanitizando o nome do arquivo para evitar diretórios inesperados
        $titulo = basename($titulo);  // Isso evita a manipulação de diretórios
        
        // Definindo o diretório onde os arquivos serão salvos
        $pasta = "pasta/";
        
        // Verificando se a pasta existe, senão cria a pasta
        if (!is_dir($pasta)) {
            mkdir($pasta, 0777, true);
        }
        
        // Definindo o caminho completo do arquivo
        $arquivo = $pasta . $titulo . ".txt";
        
        // Verificando se o arquivo já existe
        if (is_file($arquivo)) {
            echo "<script>alert('O arquivo já existe. Escolha outro título.')</script>";
            exit;
        }
        
        // Escrevendo o conteúdo no arquivo
        $completo = $titulo . "\n" . $texto . "\n";
        file_put_contents($arquivo, $completo);
        
        echo "<script>alert('Arquivo criado com sucesso!')</script>";
    }
    ?>
    
    </body>
</html>
