<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <head>
<style>
    body{
        margin:0;
        background-color:black;
        
    }
    button{
        width:50%;
        height: 250px;
        transform:translate(50%,50%);
        overflow: hidden;
        font-size: 60px;
        border-radius: 12px;
    }
    .resultado{
        width:50%;
        background-color: red;
        border-radius: 12px;
        font-size: 33px;
        text-align: center;
        height: 240px;
        margin:20px auto;
        border-radius: 12px;
    }
</style>
</head>
<body>
<form method="post"  id="novo"  style="display: none;">
<input type="text" id="entrada" style="display: none;">

</form>
<button onclick="ok()">comecar</button>
<script>
    function ok(){
        let entrada=prompt('entrada do dado');
        if(entrada!==null && entrada.trim()!==null){
            document.getElementById('entrada').value=entrada;
            document.getElementById('novo').submit();

        }
    }
</script>
<?php
session_start();
if(!isset($_SESSION['dado'])){
    $_SESSION['dado']=[];
}
if(isset($_POST['entrada'])){
    $entrada=$_POST['entrada'];
    array_push($_SESSION['dado']);
}
if(!empty($_SESSION['entrada'])){
    $dado=array_unique($_SESSION['entrada']);
    foreach($dado as $dados){
        echo"<script>
           document.write('<br>'.repeat(10));
             </script>
        ";
        echo"<div class='resultado'>$dados</div>";
        
    }
        
}
?>
</body>
</html>
