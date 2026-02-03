<?php
session_start();
$_SESSION['usuario']='admin';

unset($_SESSION['usuario']);
echo "<script>alert('removido')</script>";
?>
