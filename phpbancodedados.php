<?php
$host="localhost";
$user="root";
$db="novo";
$pass="12345";
try{
$pdo=new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$pass);
echo "estamos dentro";
}catch(PDOException $e){
    echo "error conexão";
}
?>
