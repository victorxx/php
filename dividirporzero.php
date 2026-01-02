<!DOCTYPE html>
<html lang="pt-br">
    <head>
<meta charset="utf-8">
<title>divisão segura</title>
<style>
    form{
        width:90%;
        max-width: 600px;
        margin:20px auto;
        padding:20px;
        border-radius: 12px;
        border:2px solid;
        display: flex;
        flex-direction:column;
        gap:20px;
    }
    input{
        width:90%;
        height: 40px;
        border-radius: 12px;
        padding:20px;
    }
    button{
        width:100%;
        height: 90px;
        font-size: 20px;
        border-radius: 12px;
        background-color: olivedrab;
        color:white;
        cursor: pointer;
    }
</style>
</head>
<body>
<form method="post">
<input name="primeiro" type="number" placeholder="primeiro">
<input name="segundo" type="number" placeholder="segundo">
<button type="submit">DIVIDIR</button>
</form>
<?php
if($_POST){
    $primeiro=(int)$_POST['primeiro'];
    $segundo=(int)$_POST['segundo'];
    if($segundo==0||$primeiro==0){
        echo "não pode dividir por zero";
    }
}
?>
</body>
</html>
