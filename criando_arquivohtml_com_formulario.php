<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
        }

        form {
            width: 90%;
            scale: 1.4;
            max-width: 550px;
            background-color: orangered;
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 10px 10px orange;
            text-align: center;
        }

        @media(max-width:550px) {
            form {
                scale: 1.0;
            }
        }

        form input {
            width: 80%;
            text-align: center;
            height: 50px;
            margin-bottom: 20px;
            border: none;
        }

        form button {
            width: 90%;
            height: 50px;
            border: none;
            background-color: #fff;
            cursor: pointer;
            border-radius: 12px;
            transition: 0.3s;
        }
    </style>
</head>
<body>

<form method="post">
    <input name="titulo" placeholder="Titulo da postagem">
    <input name="frame" placeholder="Digite o video youtube">
    <button type="submit">GRAVAR</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $titulo = $_POST['titulo'];
    $video = $_POST['frame'];

    if (empty($titulo) || empty($video)) {
        echo "<script>alert('Campos vazios')</script>";
        exit;
    }

    $pasta = "pasta/";
    $caminho_arquivo = $pasta . $titulo . ".html";

    if (!is_dir($pasta)) {
        mkdir($pasta, 0777, true);
    }

    $texto = '
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta property="og:image" content="https://raw.githubusercontent.com/victorxx/tump/refs/heads/main/filme.png">
        <title>' . $titulo . '</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            body {
                background-color: #000;
                color: #fff;
                margin: 0;
                padding: 0;
                font-family: Arial, Helvetica, sans-serif;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            h1 {
                margin-top: 20px;
                font-size: 2rem;
            }

            h2 a {
                color: yellow;
                text-decoration: none;
            }

            h2 a:hover {
                text-decoration: underline;
            }

            #video {
                width: 90%;
                max-width: 600px;
                margin-top: 40px;
            }

            #video iframe {
                width: 100%;
                height: 320px;
                border-radius: 12px;
                border: none;
            }

            @media (max-width: 550px) {
                #video iframe {
                    height: 230px;
                }
            }

            .propaganda {
                margin-top: 40px;
                display: flex;
                justify-content: center;
                gap: 15px;
                padding-bottom: 40px;
            }

            .propaganda a {
                background-color: red;
                color: white;
                border-radius: 10px;
                padding: 12px 18px;
                font-size: 15px;
                font-weight: bold;
                text-decoration: none;
                transition: 0.2s;
            }

            .propaganda a:hover {
                background-color: #cc0000;
                transform: scale(1.05);
            }
        </style>
    </head>
    <body>
        <h1>' . $titulo . '</h1>
        <h2>
            <a href="https://wa.me/5527999497001?text=Olá%2C+tenho+interesse+em+seguro+auto.+Pode+me+ajudar%3F">
                Proteja seu carro hoje mesmo — Faça seu Seguro Auto agora!
            </a>
        </h2>

        <div class="propaganda">
            <a href="https://filmeseserie.com.br/saida/">OPA CONFIRA ESSA OPORTUNIDADE</a>
        </div>

        <div class="propaganda">
            <a href="https://filmeseserie.com.br/produtos/ios/">PRODUTOS IOS CONFIRA</a>
        </div>

        <div id="video">
            <iframe src="' . $video . '" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </body>
    </html>
    ';

    if (file_put_contents($caminho_arquivo, $texto)) {
        echo "<script>alert('Arquivo criado')</script>";
    } else {
        echo "<script>alert('Não foi possível criar o arquivo')</script>";
    }
}
?>
</body>
</html>
