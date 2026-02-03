<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <style>
            body{
                margin:0;
                padding:0;
                font-family: Arial, Helvetica, sans-serif;
                background-color: black;
                height: 100vh;
                justify-content: center;
                align-items: center;
                display: flex;
            }
            form{
                width:90%;
                max-width: 550px;
                gap:30px;
                padding:30px;
                box-shadow: 10px 10px lime; /* Corrigido de 10x para 10px */
                align-items: center;
                flex-direction: column;
                display: flex;
                border: 1px solid lime;
            }
            input{
                width:100%;
                height: 90px;
                border:none;
                border-radius:30px;
                box-sizing: border-box;
                box-shadow: 10px 10px lime;
                font-size: 33px;
                text-align: center;
                outline: none;
            }
            button{
                cursor:pointer;
                width:100%;
                border-radius:20px;
                height:120px;
                max-width: 330px;
                border: none;
                font-weight: bold;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <input id="remove" name="remove" placeholder="Digite a linha para remover">
            <button type="submit">REMOVER</button>
        </form>

        <?php
        // Verifica se o arquivo existe para não dar erro no file()
        $nomeArquivo = "arquivo.txt";
        if(!file_exists($nomeArquivo)) {
            file_put_contents($nomeArquivo, "");
        }

        $linhas = file($nomeArquivo);
    
        if($_SERVER["REQUEST_METHOD"] === 'POST')
        {
            $index = $_POST['remove']; // Pega o valor do input

            if($index === "") // Corrigido de empty($arquivo) para verificar string vazia
            {
                echo "<script>alert('Campo vazio!')</script>";
            }
            else 
            {
                // Converte para int e subtrai 1 (pois arrays começam em 0)
                $i = (int)$index - 1;

                if(isset($linhas[$i])) 
                {
                    unset($linhas[$i]);
                    $linhas = array_values($linhas); // Reorganiza os índices
                    file_put_contents($nomeArquivo, $linhas);
                    echo "<script>alert('Linha removida!'); window.location.href=window.location.href;</script>";
                } 
                else 
                {
                    echo "<script>alert('Linha não encontrada!')</script>";
                }
            }
        }
        ?>
    </body>
</html>
