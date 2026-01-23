<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario com Modal</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: orangered;
            font-family: Arial, sans-serif;
        }

        form{
            display: none;
            padding: 20px;
            background-color: aliceblue;
            text-align: center;
            border-radius: 10px;
        }

        input{
            display: block;
            margin: 20px auto;
            padding: 15px;
            font-size: 20px;
            width: 300px;
        }

        button{
            padding: 15px 25px;
            border-radius: 12px;
            background-color: pink;
            font-size: 18px;
            cursor: pointer;
            margin: 5px;
        }

        .modal{
            display: none;
            position: fixed;
            top:0;
            left:0;
            width:100%;
            height:100vh;
            background-color: rgba(0,0,0,0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content{
            background: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<!-- Botão inicial -->
<button onclick="mostrar()">QUERO COMEÇAR</button>

<!-- Formulário -->
<form id="form" method="post">
    <input name="titulo" placeholder="titulo">
    <input name="sobre" placeholder="sobre">
    <button type="button" onclick="abrir()">Confirmar</button>
</form>

<!-- Modal -->
<div class="modal" id="modal">
    <div class="modal-content">
        <p>Deseja confirmar?</p>
        <button onclick="confirmar()">CONFIRMAR</button>
        <button onclick="fechar()">FECHAR</button>
    </div>
</div>

<script>
    // Mostrar formulário
    function mostrar(){
        document.getElementById('form').style.display='block';
    }

    // Abrir modal
    function abrir(){
        const titulo = document.querySelector('input[name="titulo"]').value.trim();
        const sobre = document.querySelector('input[name="sobre"]').value.trim();

        if(titulo === "" || sobre === ""){
            alert("Preencha todos os campos antes de confirmar!");
            return;
        }

        document.getElementById('modal').style.display='flex';
    }

    // Fechar modal
    function fechar(){
        document.getElementById('modal').style.display='none';
    }

    // Confirmar e enviar formulário
    function confirmar(){
        document.getElementById('form').submit();
    }
</script>

<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $titulo = trim($_POST['titulo']);
    $sobre = trim($_POST['sobre']);

    if(empty($titulo) || empty($sobre)){
        echo "<script>alert('Os campos estão vazios');</script>";
    } else {
        echo "<script>alert('Titulo: $titulo\\nSobre: $sobre');</script>";
        echo"<script>alert('podemos fechar')</script>";
    }
}
?>

</body>
</html>
