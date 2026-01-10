<?php
session_start();
echo 'bem vindo a ';
$_SESSION['animal']='gato';
echo $_SESSION['animal'];
?>
