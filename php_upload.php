<?php
if(isset($_FILES['arquivo']))
    {
        $nome=$_FILES['arquivo']['name'];
        $tmp=$_FILES['arquivo']['tmp_name'];

        // Caminho de destino: raiz do projeto
        $destino = __DIR__ . "/" . $nome; // salva na mesma pasta do script

        // Move o arquivo
        if(move_uploaded_file($tmp, $destino)) {
            echo "<p style='color:white; text-align:center;'>Upload feito com sucesso! Arquivo salvo em: $nome</p>";
        } else {
            echo "<p style='color:red; text-align:center;'>Erro ao enviar o arquivo.</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Upload de Arquivo</title>
<style>
  body{
    margin:0;
    background-color: black;
    height: 100vh;
    align-items: center;
    justify-content: center;
    display: flex;
    font-family: Arial, sans-serif;
  }
  form{
    gap:30px;
    width:660px;
    background-color: lime;
    border-radius: 12px;
    line-height: 130px;
    font-size: 33px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
  }
  input[type="file"] {
    width: 100%;
    max-width: 660px;
    height: 330px;
    border-radius: 12px;
    cursor: pointer;
    background-color: aquamarine;
    font-size: 20px;
    padding: 10px;
  }
  button {
    width: 100%;
    max-width: 660px;
    height: 330px;
    border-radius: 12px;
    background-color: #ff5555;
    color: white;
    font-size: 30px;
    cursor: pointer;
    border: none;
    transition: 0.2s;
  }
  button:hover {
    background-color: #ff0000;
    transform: scale(1.02);
  }
</style>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button type="submit">GRAVAR</button>
  </form>
</body>
</html>
