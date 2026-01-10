<!DOCTYPE html>
<html lang="pt-br">
<meta lang="viewport" content="width=device-width,initial-scale=1.0">
    <head>
    <style>
        button{
            font-size: 33px;
            cursor:pointer;
            border-radius: 12px;
            width:auto;
            height: auto;
            padding:20px;
            text-align: center;
            box-shadow: 10px 10px 10px purple;
        }
    </style>
    </head>
    <body>
<form method="post">
<button name="proximo" value="proximo">Proximo</button>
<button name="anterior" value="anterior">Anterior</button>
</form>
 </body>
 <?php
session_start();
$alunos=['marcelo','gustavo'];
if(!isset($_SESSION['contador'])){
    $_SESSION['contador']=0;
}
if(isset($_POST['proximo'])){
    $_SESSION['contador']++;
    if($_SESSION['contador']>=count($alunos)){
        $_SESSION['contador']=0;   
    }
}
if(isset($_POST['anterior'])){
    $_SESSION['contador']--;
    if($_SESSION['contador']<=count($alunos)){
     $_SESSION['contador']=count($alunos)-1;
    }
}
$rodar=$alunos[$_SESSION['contador']];
echo $rodar;
 ?>
</html>
