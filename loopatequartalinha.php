<?php
$nome="pasta";
$arquivo="ok.txt";
$caminho=$nome.'/'.$arquivo;
$handle=fopen($caminho,"r");
for($i=0;$i<3;$i++){
    fgets($handle);
}
$linha=fgets($handle);
echo $linha;
?>
