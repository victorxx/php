<!DOCTYPE html>
<html lang="pt-br">
    <head>
<style>
     body{
        background-color: black;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin:0;
     }
     #centralizar{
        width:50%;
        max-width: 440px;
        background-color: orange;
        border-radius: 12px;
        font-size: 33px;
        box-shadow: 10px 10px purple;
        display: flex;
        justify-content: center;
        align-items: center;
     }
     #centralizar button{
        width:330px;
        height: 250px;
        box-shadow: 10px 10px 10px purple;
        border-radius: 12px;
        font-size: 33px;
        cursor:pointer;
     }
</style>
    </head>
    <body>
<form method="post" id="conteudo" style="display: none;">
<input type="hidden" name="entrada" id="entrada">
</form>
<div id="centralizar">
<button onclick="comecar()">COMECAR</button>
</div>
<script>
function comecar(){
    let ok=prompt('Digite algo');
    if(ok && ok.trim()!==""){
        document.getElementById('entrada').value=ok;
        document.getElementById('conteudo').submit();
        alert('ok');
    }
}
</script>
</body>
<?php
if(isset($_POST['entrada'])){
    $conteudo=$_POST['entrada'];
    echo "<script>alert('$conteudo')</script>";
}
?>
</html>
