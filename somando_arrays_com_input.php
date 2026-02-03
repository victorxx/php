<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body{
            background-color: black;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
        button{
            width:50%;
            font-size:60px;
            height:250px;
            background-color:red;
            border-radius:12px;
        }
    </style>
</head>
<body>

<form method="post" style="display: none;" id="formulario">
    <input type="hidden" id="numero" name="numero">
</form>

<button onclick="comecar()">COMECAR</button>

<script>
function comecar(){
    let entrada = prompt('Digite algo somente número');
    if(!entrada || entrada.trim() === ''){
        alert('número vazio');
        return;
    }
    document.getElementById('numero').value = entrada;
    document.getElementById('formulario').submit();
}
</script>

</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] === 'POST'){

    if(!isset($_SESSION['numero'])){
        $_SESSION['numero'] = [];
    }

    $numero = $_POST['numero'];
    $numero = explode(',', $numero);
    $numero = array_filter($numero, 'is_numeric');

    $_SESSION['numero'] = array_merge($_SESSION['numero'], $numero);

    $soma = array_sum($_SESSION['numero']);
    echo "<script>alert('soma total: $soma')</script>";
}
?>
