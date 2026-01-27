<?php
$arquivo="dados.txt";
$fp=fopen($arquivo,"c+");
flock($fp,LOCK_EX);

ftruncate($fp,0);
rewind($fp);
fwrite($fp,"ola mundo");
flock($fp,LOCK_UN);
fclose($fp);
echo "finalizado com sucesso";

?>
