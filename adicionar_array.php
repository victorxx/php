<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<head>
<style>
    button{
        width:50%;
        height: 250px;
        transform:translate(50%,50%);
        overflow: hidden;
        font-size: 60px;
        border-radius: 15px;
    }@media(max-width:90em){
        button{
            background-color: aquamarine;
        }
    }
    .resultado{
        width:50%;
        background-color:yellow;
        font-size: 50px;
        text-align: center;
        height: 250px;
        margin:20px auto;
        border-radius: 12px;
    }
</style>
</head>
<body>
    <form method="post" id="formulario" style="display: none;">
        <input type="text" id="entrada" name="entrada">
    </form>

    <button onclick="ok()">COMECAR</button>

    <script>
        function ok(){
            let entrada = prompt('Digite algo');
            if(entrada !== null && entrada.trim() !== "") {
                document.getElementById('entrada').value = entrada;
                document.getElementById('formulario').submit();
            }
        }
    </script>
<?php
session_start();
if(!isset($_SESSION['dado'])){
    $_SESSION['dado']=[];
}
if(isset($_POST['entrada'])){
    $dado=$_POST['entrada'];
    array_push($_SESSION['dado'],$dado);
}
if(!empty($_SESSION['dado'])){
    echo '<script>
          for(let i=0;i<10;i++){
            document.write("<br>");
            }
          </script>';
          $unico=array_unique($_SESSION['dado']);
          foreach($unico as $dadoss){
            echo "<div class='resultado'>$dadoss</div><br>";
          }

}
?>
</body>
</html>
