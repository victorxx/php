<?php
$fp=fopen("seguro.txt","c+")
flock($fp,LOCK_EX);
ftruncate($fp,0);
rewind($fp);
fwrite($fp,"Dados importantes");
flock($fp,LOCK_UN);
fclose($fp);
?>
