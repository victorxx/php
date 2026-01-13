<?php
session_start();
if(!isset($_SESSION['contador'])){
    $_SESSION['contador'];
}
if(isset($_POST['clicado'])){
    $_SESSION['contador']++;
}
echo "
<div style='
width:100%;
text-align: center;
font-size: 90px;
top:40%;
position: absolute;
background-color: #ff4500;
border-radius: 12px;
'>
{$_SESSION['contador']}
</div>
";
?>
<form method="post">
    <button name="clicado"style="
        width: 550px;
        height: 90px;
        background-color:orange;
        border-radius:12px;
        scale:1.5;
        ">
        PRÓXIMO
    </button>
</form>
