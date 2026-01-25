
<?php
$titulo="titulo da postagem";
$video="https://www.youtube.com/embed/QdPTWhACIwY?si=Jt75fIelMzy_MgJz";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta property="og:image" content="https://raw.githubusercontent.com/victorxx/tump/refs/heads/main/filme.png">
    <title><?php echo $titulo?></title>



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

    <h1><?php echo $titulo?></h1>
    <h2><a href="https://wa.me/5527999497001?text=Olá%2C+tenho+interesse+em+seguro+auto.+Pode+me+ajudar%3F">Proteja seu carro hoje mesmo — Faça seu Seguro Auto agora!</a></h2>

    <div class="propaganda">
        <a href="https://filmeseserie.com.br/saida/">
            OPA CONFIRA ESSA OPORTUNIDADE
        </a>
    </div>

    <div class="propaganda">
        <a href="https://filmeseserie.com.br/produtos/ios/">
            PRODUTOS IOS CONFIRA
        </a>
    </div>

    <div id="video">
        <iframe
            src="<?php echo $video;?>"
            title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>
    </div>


</body>
</html>
