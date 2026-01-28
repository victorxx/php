<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
    body{
        background-color: black;
        height: 100vh;
        
        
    }
    button{
        width:50%;
        height: 250px;
        overflow: hidden;
        transform:translate(50%,50%);
        font-size: 50px;
        border-radius: 12px;
    }
    @media(max-width:90em)
    {
        button{
            background-color: orangered;
        }
    }
    .resultado{
        width:50%;
        background-color: red;
        font-size: 50px;
        text-align: center;
        height: 250px;
        margin:20px auto;
        border-radius: 12px;
    }
</style>
</head>
<body>
<form method="post"  id="form" name="form" style="display: none;">
    <input type="text" id="nome" name="nome">
</form>
<button onclick="ok()">COMECAR</button>
<script>
    function ok(){
        let entrada=prompt('Digite algo');
        if(entrada!==null){
            document.getElementById('nome').value=entrada;
            document.getElementById('form').submit();
        }

    }
                    
</script>
</form>
</body>
<?php
session_start();
if(!isset($_SESSION['dado']))
    {
        $_SESSION['dado']=[];
    }
if(isset($_POST['nome']))
    {
        $dado=$_POST['nome'];
        array_push($_SESSION['dado'],$dado);
    }
if(!empty($_SESSION['dado']))
    {
        echo '<script>
            for(let i=0;i<11;i++)
                        {
                            document.write("<br>");
                        }
              </script>';
              $unico=array_unique($_SESSION['dado']);
              foreach($unico as $ok)
                {
                   echo "<div class='resultado'>$ok</div><br>";
                }
    }
?>
</html>
