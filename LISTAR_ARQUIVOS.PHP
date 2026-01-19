<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Formulário de Texto</title>
    <style>
        body{
            margin:0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:pink;
        }
        form{
            width:90%;
            max-width:550px;
            padding:20px;
            border-radius: 12px;
            box-shadow: 10px 10px purple;
            background-color:brown;
        }
        input,textarea{
            width:90%;
            height: 50px;
            border-radius: 12px;
            margin-bottom:20px;
            padding:20px;
            font-size: 20px;
        }
        textarea{height: 120px;}
        button{
            width:150px;
            height: 50px;
            font-size: 20px;
            border:none;
            cursor:pointer;
            border-radius: 12px;
        }
    </style>
</head>
<body>
<form method="post">
    <input name="titulo" placeholder="Digite o título por favor">
    <textarea name="texto" placeholder="Digite seu texto"></textarea>
    <button type="submit">GRAVAR</button>
</form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $titulo = trim($_POST['titulo']);
    $texto = trim($_POST['texto']);

    if(empty($titulo) || empty($texto)) {
        echo "<script>alert('Preencha os campos');</script>";
        exit;
    }

    // Criar pasta se não existir
    $pasta = "pasta/";
    if(!is_dir($pasta)) {
        mkdir($pasta, 0777, true); // true para criar recursivamente se necessário
    }

    
    $titulo_seguro =$titulo;
    $nome_arquivo = $pasta . $titulo_seguro . ".txt";

    if(file_exists($nome_arquivo)) {
        echo "<script>alert('Arquivo já existe');</script>";
        exit;
    }

    // Inicializar o conteúdo antes de usar .=
    $conteudo = $titulo . "\n" . $texto . "\n";

    file_put_contents($nome_arquivo, $conteudo);
    echo "<script>alert('Arquivo criado com sucesso');</script>";
}
?>
</html>

<?php
$dados=[];
$pagina=[];
$pasta="pasta/";
$arquivos=glob($pasta."*");


$navegacao=isset($_GET['pagina'])? $_GET['pagina']:'index';

foreach($arquivos as $arquivo)
    {
        $dados[]=$arquivo;
        $pagina[]=str_replace([$pasta,".txt"],"",$arquivo);

    }
    if($navegacao!=="index")
        {
            foreach($pagina as $paginas)
                {
                    if($paginas==$navegacao)
                        {
                            echo "Estamos na página".$paginas;
                        }
                }
        }
?>
